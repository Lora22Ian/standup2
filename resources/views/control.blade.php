<!-- Fișier: resources/views/pagina.blade.php -->

@extends('layouts.master')

@section('content')
    <div class="container">
        <button class="btn btn-primary" onclick="window.location.href='{{ route('events.index') }}'">Events</button>
        <button class="btn btn-primary" onclick="window.location.href='{{ route('comedians.index') }}'">Comedians</button>
        <!-- Alte butoane sau funcționalități -->
    </div>
@endsection
