@extends('layouts.app')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            Lista comediantilor
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    @if (Auth::user()->admin === 1)

                    <a href="/comedians/create" class="btn btn-info">Adaugare Comediant Nou</a>

                    @endif
                </div>
            </div>

            <table class="table table-bordered table-stripped">
                <tr>
                    <th width="20">No</th>
                    <th>Titlu</th>
                    <th>Descriere</th>
                    <th width="300">Actiune</th>
                </tr>
                @if (count($comedians) > 0)
                    @foreach ($comedians as $key => $comediant)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $comediant->name }}</td>
                            <td>{{ $comediant->description }}</td>
                            <td>
                                <a class="btn btn-success"
                                    href="{{ route('comedians.show',$comediant->id_comediant) }}">Vizualizare</a>
                                @if (Auth::user()->admin === 1)

                                <a class="btn btn-primary"
                                    href="{{ route('comedians.edit',$comediant->id_comediant) }}">Modificare</a>
                                {{ Form::open(['method' => 'DELETE','route' =>['comedians.destroy', $comediant->id_comediant],'style'=>'display:inline']) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">Nu exista comedianti!</td>
                    </tr>
                @endif
            </table>

            <button class="btn btn-primary" onclick="window.location.href='{{route('events.index')}}'">Evenimente</button>

            <!-- Introduce nr pagina -->
            {{ $comedians->render() }}
        </div>
    </div>

@endsection