@extends('layouts.app')  

@section('content')

    <div class="panel panel-default">  

        <div class="panel-heading">  

            View Event Contact 

        </div>  

        <div class="panel-body">  

            <div class="pull-right">  


                <a class="btn btn-default" href="{{ route('eventContacts.index') }}">Inapoi la Event Contact</a>  

            </div>   
  
            <!-- EVENT DETAILS --> 

            <div class="form-group"> 

                <strong>EVENIMENT : </strong>{{ $eventContact->event->name }} 

            </div> 

            <!-- CONTACT DETAILS --> 

            <div class="form-group"> 

                <strong>CONTACT : </strong>{{ $eventContact->contact->name }} 

            </div> 

        </div>  

    </div>  

  

@endsection 
