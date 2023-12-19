@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        View contact
    </div>

    <div class="panel-body">
        <div class="pull-right">
            <a class="btn btn-default" href="{{ route('contacts.index') }}">Inapoi</a>
        </div>

        <div class="form-group">
            <strong>Nume: </strong> {{ $contact->name }}
        </div>

        <div class="form-group">
            <strong>Email: </strong> {{ $contact->email }}
        </div>

        <div class="form-group">
            <strong>Phone: </strong> {{ $contact->phone }}
        </div>
    </div>
</div>
@endsection