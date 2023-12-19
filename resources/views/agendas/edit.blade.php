@extends('layouts.app')  
@section('content')  
    <div class="panel panel-default">  
        <div class="panel-heading"> Modificare informatii Agenda</div>  
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
            <!-- Populate form fields with data from the 'agenda' table --> 
            {!! Form::model($agenda, ['method' => 'PATCH', 'route' => ['agendas.update', $agenda->id_agenda]]) !!}           
            <!-- ORA INCEPUT --> 
            <div class="form-group"> 
                <label for="start">INCEPE LA ORA:</label> 
                <input type="time" name="start" class="form-control" value="{{ old('start') ?? $agenda->start }}"> 
            </div> 
            <!-- ORA FINAL --> 
            <div class="form-group"> 
                <label for="finish">SE TERMINA LA ORA:</label> 
                <input type="time" name="finish" class="form-control" value="{{ old('finish') ?? $agenda->finish }}"> 
            </div> 
            <!-- DATA --> 
            <div class="form-group"> 
                <label for="date">DATA:</label> 
                <input type="date" name="date" class="form-control" value="{{ old('date') ?? $agenda->date }}"> 
            </div> 
            <!-- EVENT DETAILS --> 
            <div class="form-group"> 
                <label for="id_event">ID_EVENT:</label> 
                <input type="text" name="id_event" class="form-control" value="{{ $agenda->event->id_event }}"> 
            </div> 
           <!-- COMEDIANT DETAILS --> 
            <div class="form-group"> 
                <label for="id_comediant">ID_COMEDIANT:</label> 
                <input type="text" name="id_comediant" class="form-control" value="{{ $agenda->comediant->id_comediant }}"> 
            </div> 
            <br>
            <div class="form-group">  
                <input type="submit" value="Salvare Modificari Agenda" class="btn btn-primary">  
                <a href="{{ route('agendas.index') }}" class="btn btn-warning">Cancel</a>  
            </div>  
            {!! Form::close() !!}    
        </div>  
    </div>  

  

@endsection 