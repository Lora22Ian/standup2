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

        {{ Form::open(array('route' => 'contacts.store', 'method' => 'POST')) }}

        <div class="form-group">
            <label for="name">Nume</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" name="phone" class="form-control" value="{{ old('phone') }}">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Adauga Contact" class="btn btn-primary">
            <a href="{{ route('contacts.index') }}" class="btn btn-warning">Cancel</a>
        </div>

        {{ Form::close() }}

    </div>

</div>

@endsection