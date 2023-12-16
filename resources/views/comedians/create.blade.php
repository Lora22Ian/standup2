@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Adaugă Comediant nou</div>
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

            {{ Form::open(array('route' => 'comedians.store','method'=>'POST')) }}

            <div class="form-group">
                <label for="name">Nume</label>
                <input type="text" name="name" class="form-control" value="{{old('name') }}">
            </div>

            <div class="form-group">
                <label for="description">Descriere</label>
                <textarea name="description" class="form-control" rows="3">{{old('description') }}</textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Adauga Comediant" class="btn btn-info">
                <a href="{{ route('comedians.index') }}" class="btn btn-primary">Cancel</a>
            </div>

            {{ Form::close() }}

        </div>
    </div>

@endsection