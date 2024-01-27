<?php

namespace App\Livewire;

use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Session;
class Appointmentt extends Component
{
    public $selectedServices = [];
    public $totalPrice = 0;
    public $selectedService = null;

    public $ltn__name;
    public $ltn__lastname;
    public $ltn__email;
    public $ltn__message;
    public $ltn__datepick;
    public $time;
    public $isAppointmentSuccess = false;

    public $currentStep;

    public function mount()
    {
        $this->currentStep = Session::get('currentStep', 1);
    }

    public function nextStep()
    {
        if ($this->currentStep < 3) {
            $this->currentStep++;
            Log::info("Current Step: " . $this->currentStep);
            Session::put('currentStep', $this->currentStep);
        }
    }

    public function prevStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
            Log::info("Current Step: " . $this->currentStep);
            Session::put('currentStep', $this->currentStep);
        }
    }


    public function selectService($serviceName)
    {
        $this->selectedService = $serviceName;
        $this->calculateTotalPrice();
        $this->nextStep();
    }

    public function toggleSelection($service)
    {
        if (in_array($service, $this->selectedServices)) {
            $this->selectedServices = array_diff($this->selectedServices, [$service]);
        } else {
            $this->selectedServices[] = $service;
        }

        $this->calculateTotalPrice();
    }

    private function calculateTotalPrice()
    {
        $servicePrices = [
            'Basic' => 19.95,
            'Premium' => 39.95,
            'Diamant' => 29.95,
        ];

        $prices = [
            'Lakbescherming' => 49.95,
            'Velgenreiniging' => 19.95,
            'Motorruimte reiniging' => 29.95,
            'Interieur stofzuigen' => 24.95,
            'Handwas' => 34.95,
        ];

        $this->totalPrice = 0;

        foreach ($this->selectedServices as $service) {
            if (isset($prices[$service])) {
                $this->totalPrice += $prices[$service];
            }
        }

        if (isset($servicePrices[$this->selectedService])) {
            $this->totalPrice += $servicePrices[$this->selectedService];
        }
    }

    public function submitForm()
    {
        Log::info("Submit form");

        $validatedData = Validator::make($this->all(), [
            'ltn__name' => 'required|string',
            'ltn__lastname' => 'required|string',
            'ltn__email' => 'required|email',
            'ltn__message' => 'required|string',
            'ltn__datepick' => 'required|date|after_or_equal:tomorrow',
            'time' => 'required',
            'totalPrice' => 'required|numeric',
        ], [
            'required' => 'Het :attribute veld is verplicht.',
            'string' => 'De :attribute moet een tekst zijn.',
            'email' => 'Het :attribute moet een geldig e-mailadres zijn.',
            'date' => 'Voer een geldige datum in voor :attribute.',
            'after_or_equal' => 'De :attribute moet na of gelijk aan morgen zijn.',
        ])->validate();

        $customer_id = auth()->user()->id;

        $extra = implode(", ", $this->selectedServices);
        $appointment = new Appointment([
            'customer_id' => $customer_id,
            'email' => $validatedData['ltn__email'],
            'omschrijving' => $validatedData['ltn__message'],
            'order_status' => 'wachtend',
            'service' => $this->selectedService, 
            'extra' => $extra,     
            'price' => $this->totalPrice, 
            'date' => $validatedData['ltn__datepick'],
            'time' => $validatedData['time'],
        ]);

        $appointment->save();


        $this->resetErrorBag();

        session()->flash('message', 'Afspraak succesvol gemaakt!');

        $template_path = 'mail/test_email_template';
        Mail::send(['html' => $template_path], ['name' => $validatedData['ltn__name'], 'service' => $this->selectedService, 'extra' => $extra, $validatedData], function ($message) use ($validatedData) {
            $message->to($validatedData['ltn__email'], $validatedData['ltn__name'])
                ->subject('Afspraak gemaakt');
            $message->from('pietermei29@gmail.com', 'Pureshine.nl');
        });   
        $this->isAppointmentSuccess = true;

     }

    public function render()
    {
        return view('livewire.appointment', [
            'selectedServices' => $this->selectedServices,
            'totalPrice' => $this->totalPrice,
        ]);
    }


}
