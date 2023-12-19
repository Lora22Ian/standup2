@extends('layouts.app') 

 

@section('content') 

    <div class="panel panel-default"> 

        <div class="panel-heading"> 

            View Event 

        </div> 

        <div class="panel-body"> 

            <div class="pull-right"> 

                <a class="btn btn-default" href="{{ route('events.index') }}">Inapoi</a> 

            </div> 

 

            <!--Name--> 

            <div class="form-group"> 

                <strong>Nume: </strong> {{ $event->name }} 

            </div> 

 

            <!--Descriere--> 

            <div class="form-group"> 

                <strong>Descriere: </strong> {{ $event->description }} 

            </div> 

 

            <!--Date--> 

            <div class="form-group"> 

                <strong>Data: </strong>{{ $event->date}} 

            </div> 

 

            <!--Location--> 

            <div class="form-group"> 

                <strong>Locatia: </strong>{{ $event->location}} 

            </div> 

 

        </div> 

    </div> 

@endsection 