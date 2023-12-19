@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            View SP Contact
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('spContacts.index') }}">Inapoi la Patreneri/Sponsori Contact</a>
            </div>

            <!-- EVENT DETAILS -->
            <div class="form-group">
                <strong>EVENIMENT : </strong>{{ $spContact->event->name }}
            </div>

            <!-- SPONSOR/PARTNER DETAILS -->
            <div class="form-group">
                <strong>SPONSOR / PARTENER : </strong>{{ $spContact->partnerSponsor->name }}
            </div>
        </div>
    </div>
@endsection
