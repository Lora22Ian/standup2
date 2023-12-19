@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Adaugă Partener / Sponsor nou</div>
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

            {{ Form::open(array('route' => 'partnerSponsors.store', 'method' => 'POST')) }}
            <!--Name-->
            <div class="form-group">
                <label for="name">Nume</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <!--Email-->
            <div class="form-group">
                <label for="email">Email</label><textarea name="email" class="form-control"
                    rows="3">{{ old('email') }}</textarea>
            </div>

            <!--Phone-->
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="integer" name="phone" class="form-control" value="{{ old('phone') }}">
            </div>
            <br>

            <div class="form-group">
                <input type="submit" value="Adauga Partnere / Sponsor" class="btn btn-primary">
                <a href="{{ route('partnerSponsors.index') }}" class="btn btn-warning">Cancel</a>
            </div>

            {{ Form::close() }}
        </div>
    </div>
@endsection
