<div class="body-wrapper">



    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bg="img/bg/appointment.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Welkom op Pureshine</h6>
                            <h1 class="section-title white-color">Maak Een Afspraak</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Appointment</li>
                            </ul>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .stepper-wrapper {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stepper-item {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            transition: all 0.5s;
            @media (max-width: 768px) {
                font-size: 12px;
            }
        }

        .stepper-item::before,
        .stepper-item::after {
            position: absolute;
            content: "";
            border-bottom: 2px solid #ccc;
            width: 100%;
            top: 20px;
            transition: transform 0.5s; /* Voeg een overgang toe voor de transform eigenschap met een duur van 0.3 seconden */
            z-index: 2;
        }

        .stepper-item::before {
            left: -50%;
            transform-origin: right; /* Toegevoegd voor een soepele animatie van links naar rechts */
        }

        .stepper-item::after {
            left: 50%;
            transform-origin: left; /* Toegevoegd voor een soepele animatie van rechts naar links */
        }

        .stepper-item .step-counter {
            position: relative;
            z-index: 5;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #ccc;
            margin-bottom: 6px;
            transition: all 0.5s;
        }

        .stepper-item.active {
            font-weight: bold;
        }

        .stepper-item.completed .step-counter {
            background-color: #4bb543;
        }

        .stepper-item.completed::after {
            position: absolute;
            content: "";
            border-bottom: 2px solid #4bb543;
            width: 100%;
            top: 20px;
            left: 50%;
            transition: all 0.5s;
            z-index: 3;
        }

        .stepper-item:first-child::before {
            content: none;
        }

        .stepper-item:last-child::after {
            content: none;
        }
    </style>
 <style>
    .prs__service-item-2 {
        overflow: hidden;
        transition: transform 0.5s ease-in-out;
    }

    .animate-next {
        transform: translateX(-100%);
    }

    .animate-prev {
        transform: translateX(100%);
    }
</style>
    <div class="stepper-wrapper" wire:target="currentStep">
        <div class="stepper-item {{ $currentStep === 1 ? 'active' : ($currentStep > 1 ? 'completed' : '') }}">
            <div class="step-counter">1</div>
            <div class="step-name">Pakketen</div>
        </div>
        <div class="stepper-item {{ $currentStep === 2 ? 'active' : ($currentStep > 2 ? 'completed' : '') }}">
            <div class="step-counter">2</div>
            <div class="step-name">Extra's</div>
        </div>
        <div class="stepper-item {{ $currentStep === 3 ? 'active' : '' }}">
            <div class="step-counter">3</div>
            <div class="step-name">Gegevens</div>
        </div>
    </div>

    <!-- BREADCRUMB AREA END -->
   <!-- APPOINTMENT AREA START -->
   <div class="ltn__appointment-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__appointment-inner">
                    <form wire:submit.prevent="submitForm">
                        @if($currentStep === 1)
                        <h6>Persoonlijke Informatie</h6>


                        <div class="row justify-content-center">


                            <div class="col-lg-4 col-md-6" wire:click="selectService('Basic')">
                                <div class="ltn__service-item-2 white-bg" style="border: 1px solid black;">
                                    <div class="service-item-brief">
                                        <h3><a href="service-details.html">Basic</a></h3>
                                        <hr>
                                        <ul>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Interieur stomen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Interieur stofzuigen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Binnenramen reinigen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Kofferbak reinigen</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Stoomreinigen Ventilatieroosters, kleine hoekjes en gaatjes</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Dieptereiniging & shamporelle van 2 voorstoelen</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Kofferbaklijst reinigen</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Deurlijst reinigen</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Dashboard detailing</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Diepte reiniging van vloermatten</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Shamponeren (alle aanraakpunten)</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Kunststof/plastic voeden</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Binnenkant deuren reinigen</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Velgen reiniging</li>
                                        </ul>
                                        <div class="btn btn-danger rounded-lg d-block mx-auto">Select</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" wire:click="selectService('Premium')">
                                <div class="ltn__service-item-2 white-bg" style="border: 1px solid black;">
                                    <div class="service-item-brief">
                                        <h3><a href="service-details.html">Premium</a></h3>
                                        <hr>
                                        <ul>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Interieur stomen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Interieur stofzuigen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Binnenramen reinigen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Kofferbak reinigen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Stoomreinigen Ventilatieroosters, kleine hoekjes en gaatjes</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Dieptereiniging & shamporelle van 2 voorstoelen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Kofferbaklijst reinigen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Deurlijst reinigen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Dashboard detailing</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Diepte reiniging van vloermatten</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Shamponeren (alle aanraakpunten)</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Kunststof/plastic voeden</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Binnenkant deuren reinigen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Velgen reiniging</li>


                                        </ul>
                                        <div class="btn btn-danger rounded-lg d-block mx-auto">Select</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6" wire:click="selectService('Diamant')">
                                <div class="ltn__service-item-2 white-bg" style="border: 1px solid black;">
                                    <div class="service-item-brief">
                                        <h3><a href="service-details.html">Diamant</a></h3>
                                        <hr>
                                        <ul>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Interieur stomen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Interieur stofzuigen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Binnenramen reinigen</li>
                                            <li><i class="fa-solid fa-check" style="color: lightgreen;"></i> Kofferbak reinigen</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Stoomreinigen Ventilatieroosters, kleine hoekjes en gaatjes</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Dieptereiniging & shamporelle van 2 voorstoelen</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Kofferbaklijst reinigen</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Deurlijst reinigen</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Dashboard detailing</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Diepte reiniging van vloermatten</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Shamponeren (alle aanraakpunten)</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Kunststof/plastic voeden</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Binnenkant deuren reinigen</li>
                                            <li><i class="fa-solid fa-times" style="color: red;"></i> Velgen reiniging</li>
                                        </ul>
                                        <div class="btn btn-danger rounded-lg d-block mx-auto">Select</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div>

                            @if($selectedService)
                                <div class="mt-4">
                                    Geselecteerd servicepakket: <strong>{{ $selectedService }}</strong>
                                </div>
                            @endif
                        </div>
                        @elseif($currentStep === 2)
                        <div class="input-item input-item-textarea">
                            <div class="ltn__service-list-menu text-uppercase mt-50">
                                
            <div class="input-item input-item-textarea">
                <div class="ltn__service-list-menu text-uppercase mt-50">
                    <ul>
                        <!-- Voeg hier je diensten toe -->
                        <li class="service-item" wire:click="toggleSelection('Lakbescherming')" 
                            @if(in_array('Lakbescherming', $selectedServices)) style="background-color: lightgreen; transition: background-color 0.5s;" @else style="transition: background-color 0.5s;" @endif>
                            <i class="fas fa-tint"></i> Lakbescherming <span class="service-price">€49.95</span>
                        </li>
                        <li class="service-item" wire:click="toggleSelection('Velgenreiniging')" 
                            @if(in_array('Velgenreiniging', $selectedServices)) style="background-color: lightgreen; transition: background-color 0.5s;" @else style="transition: background-color 0.5s;" @endif>
                            <i class="fas fa-spray-can"></i> Velgenreiniging <span class="service-price">€19.95</span>
                        </li>
                        <li class="service-item" wire:click="toggleSelection('Motorruimte reiniging')" 
                            @if(in_array('Motorruimte reiniging', $selectedServices)) style="background-color: lightgreen; transition: background-color 0.5s;" @else style="transition: background-color 0.5s;" @endif>
                            <i class="fas fa-wrench"></i> Motorruimte reiniging <span class="service-price">€29.95</span>
                        </li>
                        <li class="service-item" wire:click="toggleSelection('Interieur stofzuigen')" 
                            @if(in_array('Interieur stofzuigen', $selectedServices)) style="background-color: lightgreen; transition: background-color 0.5s;" @else style="transition: background-color 0.5s;" @endif>
                            <i class="fas fa-broom"></i> Interieur stofzuigen <span class="service-price">€24.95</span>
                        </li>
                        <li class="service-item" wire:click="toggleSelection('Handwas')" 
                            @if(in_array('Handwas', $selectedServices)) style="background-color: lightgreen; transition: background-color 0.5s;" @else style="transition: background-color 0.5s;" @endif>
                            <i class="fas fa-hand-sparkles"></i> Handwas <span class="service-price">€34.95</span>
                        </li>
                    </ul>
                </div>
            
                <div>
                    <h4>Geselecteerde diensten:</h4>
                    <ul>
                        @foreach($selectedServices as $service)
                            <li>{{ $service }}</li>
                        @endforeach
                    </ul>
                    <div>
                        <h4>Totaalprijs: €{{ number_format($totalPrice, 2) }}</h4> 
                    </div>
                    <button wire:click="prevStep" class="btn btn-secondary mr-2">Vorige</button>
                    <button wire:click="nextStep" class="btn btn-primary">Volgende</button>
                </div>
            </div>
            
            @elseif($currentStep === 3)

       
<div class="input-item input-item-textarea">
    <div class="ltn__service-list-menu text-uppercase mt-50">
        

    
            <h6>Persoonlijke Informatie</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" wire:model="ltn__name" placeholder="Voornaam" class="@error('ltn__name') is-invalid @enderror" style="@error('ltn__name') border-color: red; margin-bottom: 10px; @enderror">
                                    @error('ltn__name') <span class="text-danger" style="display: block; margin-top: 5px; font-size: 14px;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" wire:model="ltn__lastname" placeholder="Achternaam" class="@error('ltn__lastname') is-invalid @enderror" style="@error('ltn__lastname') border-color: red; margin-bottom: 10px; @enderror">
                                    @error('ltn__lastname') <span class="text-danger" style="display: block; margin-top: 5px; font-size: 14px;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" wire:model="ltn__email" placeholder="E-mailadres" class="@error('ltn__email') is-invalid @enderror" style="@error('ltn__email') border-color: red; margin-bottom: 10px; @enderror">
                                    @error('ltn__email') <span class="text-danger" style="display: block; margin-top: 5px; font-size: 14px;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" wire:model="ltn__phone" placeholder="Telefoonnummer" class="@error('ltn__phone') is-invalid @enderror" style="@error('ltn__phone') border-color: red; margin-bottom: 10px; @enderror">
                                    @error('ltn__phone') <span class="text-danger" style="display: block; margin-top: 5px; font-size: 14px;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                    
                        <h6>Is er iets dat we moeten weten over uw auto?</h6>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea wire:model="ltn__message" placeholder="Enter message" class="@error('ltn__message') is-invalid @enderror" style="@error('ltn__message') border-color: red; margin-bottom: 10px; @enderror"></textarea>
                            @error('ltn__message') <span class="text-danger" style="display: block; margin-top: 5px; font-size: 14px;">{{ $message }}</span> @enderror
                        </div>
                    
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <h6>Postcode</h6>
                                <div class="input-item">
                                    <input type="text" class="form-control @error('postcode') is-invalid @enderror" placeholder="Postcode" style="@error('postcode') border-color: red; margin-bottom: 10px; @enderror">
                                    @error('postcode') <span class="text-danger" style="display: block; margin-top: 5px; font-size: 14px;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                    
                            <div class="col-lg-6">
                                <h6>First Choice</h6>
                                <div class="row">   
                                    <div class="col-md-6">
                                        <div class="input-item">
                                            <input type="date" class="form-control nice-select @error('ltn__datepick') is-invalid @enderror" placeholder="Select Date" wire:model="ltn__datepick" style="@error('ltn__datepick') border-color: red; margin-bottom: 10px; @enderror">
                                            @error('ltn__datepick') <span class="text-danger" style="display: block; margin-top: 5px; font-size: 14px;">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-time">
                                            <select class="nice-select @error('time') is-invalid @enderror" wire:model="time" style="@error('time') border-color: red; margin-bottom: 10px; @enderror">
                                                <option>HH:MM</option>
                                                <option>12:00</option>
                                                <option>13:00</option>
                                            </select>
                                            @error('time') <span class="text-danger" style="display: block; margin-top: 5px; font-size: 14px;">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <div class="alert alert-warning" role="alert">
                Let op: de door u gevraagde datum en tijd zijn mogelijk niet beschikbaar. We zullen contact met u opnemen om uw daadwerkelijke afspraakgegevens te bevestigen.
            </div>
        
            <div class="btn-wrapper text-center mt-0">
                <button wire:click="prevStep" class="btn btn-secondary mr-2">Vorige</button>

                <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit Now</button>
            </div>
                            @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
