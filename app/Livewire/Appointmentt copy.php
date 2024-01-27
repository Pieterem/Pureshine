<?php

namespace App\Livewire;

use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class Appointmentt extends Component
{
    public $selectedService = '';
    public $selectedServices = [];

    public $ltn__name;
    public $ltn__lastname;
    public $ltn__email;
    // ... voeg hier andere velden toe

    public function selectService($serviceName)
    {
        $this->selectedService = $serviceName;
    }

    public function toggleSelection($service)
    {
        if (in_array($service, $this->selectedServices)) {
            $this->selectedServices = array_diff($this->selectedServices, [$service]);
        } else {
            $this->selectedServices[] = $service;
        }
    }

    public function submitForm()
    {
        $validatedData = Validator::make([
            'ltn__name' => $this->ltn__name,
            'ltn__lastname' => $this->ltn__lastname,
            'ltn__email' => $this->ltn__email,
            // ... voeg hier andere velden toe
        ], [
            'ltn__name' => 'required|string',
            'ltn__lastname' => 'required|string',
            'ltn__email' => 'required|email',
            // ... voeg hier andere validatieregels toe
        ])->validate();
        // $This->log("test");
        // Hier kun je je logica plaatsen om het formulier te verwerken

        // Na verwerking eventueel een bericht naar de frontend sturen
        session()->flash('message', 'Formulier is succesvol verzonden!');
    }

    public function render()
    {
        return view('livewire.appointment');
    }
}
