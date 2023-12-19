@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            Lista agendelor
            <div class="panel-body">
                <div class="form-group">
                    <div class="pull-right">
                        @if (Auth::user()->admin === 1)
                            <a href="/agendas/create" class="btn btn-primary">Adaugare Agenda Noua</a>
                        @endif
                    </div>
                </div>

                <table class="table table-bordered table-stripped">
                    <tr>
                        <th width="20">No</th>
                        <th>INCEPE LA ORA:</th>
                        <th>SE TERMINA LA ORA:</th>
                        <th>DATA:</th>
                        <th>EVENIMENT:</th>
                        <th>COMEDIANT:</th>
                        <th width="300">Actiune</th>
                    </tr>

                    @if (count($agendas) > 0)
                        @foreach ($agendas as $key => $agenda)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $agenda->start }}</td>
                                <td>{{ $agenda->finish }}</td>
                                <td>{{ $agenda->date }}</td>
                                <td>{{ $agenda->event->name }}</td>
                                <td>{{ $agenda->comediant->name }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('agendas.show', $agenda->id_agenda) }}">Vizualizare</a>
                                    @if (Auth::user()->admin === 1)
                                        <a class="btn btn-primary" href="{{ route('agendas.edit', $agenda->id_agenda) }}">Modificare</a>
                                        {{ Form::open(['method' => 'DELETE', 'route' => ['agendas.destroy', $agenda->id_agenda], 'style' => 'display:inline']) }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">Nu exista agende!</td>
                        </tr>
                    @endif
                </table>

                <!-- Introduce nr pagina -->
                {{ $agendas->render() }}
            </div>
        </div>
    </div>
@endsection