@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Dashboard') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome !') }}
                </div>
                <div class="mt-4 text-center">
                        <a href="{{ route('events.index') }}" class="btn btn-primary mx-2 my-2">Evenimente</a>
                        <a href="{{ route('comedians.index') }}" class="btn btn-primary mx-2 my-2">Comedianti</a>
                        <a href="{{ route('contacts.index') }}" class="btn btn-primary mx-2 my-2">Contacte</a>
                        <a href="{{ route('agendas.index') }}" class="btn btn-primary mx-2 my-2">Agende</a>
                </div>
                <div class="mt-4 text-center ">
                        <a href="{{ route('eventContacts.index') }}" class="btn btn-primary mx-2 my-2">Event Contact</a>
                        <a href="{{ route('partnerSponsors.index') }}" class="btn btn-primary mx-2 my-2">Parteneri/Sponsori</a>
                        <a href="{{ route('spContacts.index') }}" class="btn btn-primary mx-2 my-2">Parteneri/Sponsori C </a>
                        <a href="{{ url('/ticket') }}" class="btn btn-primary mx-2 my-2">Cumpara bilete</a>
                </div>

            </div>
            </div>
            
        </div>
    </div>
</div>
@endsection