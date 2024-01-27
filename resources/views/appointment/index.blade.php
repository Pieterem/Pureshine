@extends('layouts.navbar', ['title'=> 'Home'])

@section('page-content')
    <div>
        @livewire('appointmentt')
    </div>
@endsection
@livewireScripts
