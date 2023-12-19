@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Modificare informatii</div>
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

        <!-- Populate form fields with data from the 'partnerSponsor' table -->
        {!! Form::model($partnerSponsor, ['method' => 'PATCH', 'route' => ['partnerSponsors.update', $partnerSponsor->id_sp]]) !!}

        <!--Name-->
        <div class="form-group">
            <label for="name">Nume</label>
            <input type="text" name="name" class="form-control" value="{{ $partnerSponsor->name }}">
        </div>

        <!--Email-->
        <div class="form-group">
            <label for="email">Email</label><textarea name="email" class="form-control"
                rows="3">{{ $partnerSponsor->email }}</textarea>
        </div>

        <!--Phone-->
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="integer" name="phone" class="form-control" value="{{ $partnerSponsor->date }}">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" value="Salvare Modificari" class="btn btn-primary">
            <a href="{{ route('partnerSponsors.index') }}" class="btn btn-warning">Cancel</a>
        </div>

        {!! Form::close() !!}

    </div>
</div>

@endsection
