@extends('layouts.app') 

@section('content') 

    @if ($message = Session::get('success')) 

        <div class="alert alert-success"> 

            <p>{{ $message }}</p> 

        </div> 

    @endif 

    <div class="panel panel-default"> 

        <div class="panel-heading"> Lista evenimente </div> 

        <div class="panel-body"> 

            <div class="form-group"> 

                <div class="pull-right"> 
                @if (Auth::user()->admin === 1)
                    <a href="/events/create" class="btn btn-primary">Adaugare Eveniment Noua</a> 
                @endif
                </div> 

            </div> 

            <table class="table table-bordered table-stripped"> 

                <tr> 

                    <th width="20">No</th> 

                    <th>Titlu</th> 

                    <th>Descriere</th> 

                    <th>Date</th> 

                    <th>Locatie</th> 

                    <th width="300">Actiune</th> 

                </tr> 

                @if (count($events) > 0) 

                    @foreach ($events as $key => $event) 

                        <tr> 

                            <td>{{ ++$i }}</td> 

                            <td>{{ $event->name }}</td> 

                            <td>{{ $event->description }}</td> 

                            <td>{{ $event->date }}</td> 

                            <td>{{ $event->location }}</td> 

                            <td> 

            <a class="btn btn-success" href="{{ route('events.show', $event->id_event) }}">Vizualizare</a> 

            <!--<a class="btn btn-primary" href="{{ route('events.edit', $event->id_event) }}">Modificare</a> 

     {{ Form::open(['method' => 'DELETE','route' => ['events.destroy', $event->id_event],'style'=>'display:inline']) }} 

        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}    {{ Form::close() }} 

-->
        @if (Auth::user()->admin === 1)
                                    
                                    <a class="btn btn-primary" href="{{ route('events.edit', $event->id_event) }}">Modificare</a>
                                    {{ Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id_event], 'style' => 'display:inline']) }}
                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {{ Form::close() }}
                                @endif            
</td> </tr> 

                    @endforeach 

                @else 

                    <tr>  <td colspan="4">Nu exista eveniment!</td>   </tr> 

                @endif 

            </table> 

            <!-- Introduce nr pagina --> 

            {{ $events->render() }} 

        </div> 

    </div> 

@endsection 