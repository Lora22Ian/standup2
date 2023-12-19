@extends('layouts.app') 

@section('content') 

    <div class="panel panel-default"> 

        <div class="panel-heading">Adaugă Event Contact nou</div> 

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

            {{ Form::open(array('route' => 'eventContacts.store', 'method' => 'POST')) }} 

            <!-- EVENIMENT id_event --> 

            <div class="form-group"> 

                <label for="id_event">Eveniment:</label> 

                <select name="id_event" class="form-control"> 

                    @foreach($events as $event) 

                        <option value="{{ $event->id_event }}">{{ $event->name }}</option> 

                    @endforeach 
                </select>
            </div> 
            <!-- CONTACT id_comediant --> 

            <div class="form-group"> 

                <label for="id_contact">Contact:</label> 

                <select name="id_contact" class="form-control"> 

                    @foreach($contacts as $contact) 

                        <option value="{{ $contact->id_contact }}">{{ $contact->name }}</option> 
                    @endforeach
                </select> 
            </div> 
            <br>
            <div class="form-group"> 

                <input type="submit" value="Adauga Event Contact" class="btn btn-primary"> 

                <a href="{{ route('eventContacts.index') }}" class="btn btn-warning">Cancel</a> 
            </div> 

            {{ Form::close() }} 
        </div> 

    </div> 
@endsection 
