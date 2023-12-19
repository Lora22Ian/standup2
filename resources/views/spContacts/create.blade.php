@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Adaugă SP Contact nou</div>
    <div class="panel-body">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Errors:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{ Form::open(array('route' => 'spContacts.store', 'method' => 'POST')) }}

        <!-- EVENIMENT id_event -->
        <div class="form-group">
            <label for="id_event">Eveniment:</label>
            <select name="id_event" class="form-control">
                @foreach($events as $event)
                <option value="{{ $event->id_event }}">{{ $event->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- PARTNER/SPONSOR id_sp -->
        <div class="form-group">
            <label for="id_sp">Partener/Sponsor:</label>
            <select name="id_sp" class="form-control">
                @foreach($partnerSponsors as $partnerSponsor)
                <option value="{{ $partnerSponsor->id_sp }}">{{ $partnerSponsor->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Adauga SP Contact" class="btn btn-primary">
            <a href="{{ route('spContacts.index') }}" class="btn btn-warning">Cancel</a>
        </div>

        {{ Form::close() }}
    </div>
</div>

@endsection
