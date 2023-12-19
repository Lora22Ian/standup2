@extends('layouts.app')   

@section('content')  
    <div class="panel panel-default">  

        <div class="panel-heading"> Modificare informatii event contact</div>  

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

            <!-- Populate form fields with data from the 'eventContact' table --> 

            {!! Form::model($eventContact, ['method' => 'PATCH', 'route' => ['eventContacts.update', $eventContact->id_rep_cont]]) !!}

            <!-- EVENT DETAILS --> 

            <div class="form-group"> 

                <label for="id_event">ID_EVENT:</label> 

                <input type="text" name="id_event" class="form-control" value="{{ $eventContact->event->id_event }}"> 

            </div> 

  

           <!-- COMEDIANT DETAILS --> 

            <div class="form-group"> 

                <label for="id_contact">ID_CONTACT:</label> 

                <input type="text" name="id_contact" class="form-control" value="{{ $eventContact->contact->id_contact }}"> 

            </div> 
            <br>
            <div class="form-group">  

                <input type="submit" value="Salvare Modificari Event Contact " class="btn btn-primary">  

                <a href="{{ route('eventContacts.index') }}" class="btn btn-warning">Cancel</a>  

            </div>  

  

            {!! Form::close() !!}  

  

        </div>  

  

    </div>  

  

@endsection 
