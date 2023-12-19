@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="panel panel-default">
    <div class="panel-heading">
        Lista contactelor
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    @if (Auth::user()->admin === 1)
                    <a href="/contacts/create" class="btn btn-primary">Adaugare Contact Nou</a>
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
                @if (count($contacts) > 0)
                @foreach ($contacts as $key => $contact)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('contacts.show', $contact->id_contact) }}">Vizualizare</a>
                        @if (Auth::user()->admin === 1)
                        <a class="btn btn-primary" href="{{ route('contacts.edit', $contact->id_contact) }}">Modificare</a>
                        {{ Form::open(['method' => 'DELETE', 'route' => ['contacts.destroy', $contact->id_contact], 'style' => 'display:inline']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                        @endif
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">Nu exista contacte!</td>
                </tr>
                @endif
            </table>
            <!-- Introduce nr pagina -->
            {{ $contacts->render() }}
        </div>
    </div>
</div>

@endsection