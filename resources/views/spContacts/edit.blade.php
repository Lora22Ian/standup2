@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Modificare informatii event contact</div>
    <div class="panel-body">

        <!-- Check for validation errors -->
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Eroare:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Populate form fields with data from the 'eventContact' table -->
        {!! Form::model($spContact, ['method' => 'PATCH', 'route' => ['spContacts.update', $spContact->id_contact]]) !!}

        <!-- EVENT DETAILS -->
        <div class="form-group">
            <label for="id_event">ID_EVENT:</label>
            <input type="text" name="id_event" class="form-control" value="{{ $spContact->event->id_event }}">
        </div>

        <!-- SP DETAILS -->
        <div class="form-group">
            <label for="id_sp">ID_SPONSOR/PARTENER:</label>
            <input type="text" name="id_sp" class="form-control" value="{{ $spContact->partnerSponsor->id_sp }}">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Salvare Modificari SP Contact " class="btn btn-primary">
            <a href="{{ route('spContacts.index') }}" class="btn btn-warning">Cancel</a>
        </div>

        {!! Form::close() !!}
    </div>
</div>
@endsection
