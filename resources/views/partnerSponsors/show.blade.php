@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">
        View Partner/Sponsor
    </div>
    <div class="panel-body">
        <div class="pull-right">
            <a class="btn btn-default" href="{{ route('partnerSponsors.index') }}">Inapoi la Parteneri/Sponsori</a>
        </div>

        <!--Name-->
        <div class="form-group">
            <strong>Nume: </strong> {{ $partnerSponsor->name }}
        </div>

        <!--Email-->
        <div class="form-group">
            <strong>Email: </strong> {{ $partnerSponsor->email }}
        </div>

        <!--Phone-->
        <div class="form-group">
            <strong>Phone: </strong>{{ $partnerSponsor->phone }}
        </div>

    </div>
</div>

@endsection
