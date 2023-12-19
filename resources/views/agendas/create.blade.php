@extends('layouts.app')

@section('content')

<div class="panel panel-default">
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

        {{ Form::open(array('route' => 'agendas.store', 'method' => 'POST')) }}

        <div class="form-group">
            <label for="start">Incepe la ora:</label>
            <input type="time" name="start" class="form-control" value="{{ old('start') }}">
        </div>

        <div class="form-group">
            <label for="finish">Se termină la ora:</label>
            <input type="time" name="finish" class="form-control" value="{{ old('finish') }}">
        </div>

        <div class="form-group">
            <label for="date">Data:</label>
            <input type="date" name="date" class="form-control" value="{{ old('date') }}">
        </div>

        <div class="form-group">
            <label for="id_event">Eveniment:</label>
            <select name="id_event" class="form-control">
                @foreach($events as $event)
                <option value="{{ $event->id_event }}">{{ $event->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_comediant">Comediant:</label>
            <select name="id_comediant" class="form-control">
                @foreach($comedians as $comediant)
                <option value="{{ $comediant->id_comediant }}">{{ $comediant->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Adauga Agendă" class="btn btn-primary">
            <a href="{{ route('agendas.index') }}" class="btn btn-warning">Cancel</a>
        </div>

        {{ Form::close() }}

    </div>

</div>

@endsection