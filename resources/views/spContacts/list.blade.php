@extends('layouts.app')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="panel panel-default">
    <div class="panel-heading">
        Lista sponsor/partener contact
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    @if (Auth::user()->admin === 1)
                    <a href="/spContacts/create" class="btn btn-default">Adaugare sp contact Nou</a>
                    @endif
                </div>
            </div>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th width="20">No</th>
                    <th> EVENIMENT: </th>
                    <th> PARTENER SPONSOR: </th>
                    <th width="300">Actiune</th>
                </tr>
                @if (count($spContacts) > 0)
                @php $i = 0 @endphp
                @foreach ($spContacts as $key => $spContact)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $spContact->event->name }}</td>
                    <td>{{ $spContact->partnerSponsor->name }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('spContacts.show', $spContact->id_contact) }}">Vizualizare</a>
                        @if (Auth::user()->admin === 1)
                        <a class="btn btn-primary" href="{{ route('spContacts.edit', $spContact->id_contact) }}">Modificare</a>
                        {{ Form::open(['method' => 'DELETE', 'route' => ['spContacts.destroy', $spContact->id_contact], 'style' => 'display:inline']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                        @endif
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">Nu exista partener/sponsor contact!</td>
                </tr>
                @endif
            </table>
            
        </div>
    </div>
</div>

@endsection
