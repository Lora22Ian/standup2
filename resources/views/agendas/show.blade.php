@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        View Agenda
    </div>
    <div class="panel-body">
        <div class="pull-right">
            <a class="btn btn-default" href="{{ route('agendas.index') }}">Inapoi</a>
        </div>
        <!--ORA INCEPUT-->
        <div class="form-group">
            <strong>INCEPE LA ORA: </strong>{{ $agenda->start}}
        </div>
        <!--ORA FINAL-->
        <div class="form-group">
            <strong>SE TERMINA LA ORA: </strong>{{ $agenda->finish}}
        </div>
        <!--ORA FINAL-->
        <div class="form-group">
            <strong>DATA : </strong>{{ $agenda->date}}
        </div>
        <!-- EVENT DETAILS -->
        <div class="form-group">
            <strong>EVENIMENT : </strong>{{ $agenda->event->name }}
        </div>
        <!-- COMEDIANT DETAILS -->
        <div class="form-group">
            <strong>COMEDIANT : </strong>{{ $agenda->comediant->name }}
        </div>
    </div>
</div>
@endsection