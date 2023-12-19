@extends('layouts.app') 

@section('content') 

    @if ($message = Session::get('success')) 

        <div class="alert alert-success"> 

            <p>{{ $message }}</p> 

        </div> 

    @endif 

    <div class="panel panel-default"> 

        <div class="panel-heading"> 

            Lista parteneri / sponsori 

        <div class="panel-body"> 

            <div class="form-group"> 

                <div class="pull-right">
                @if (Auth::user()->admin === 1)
                    <a href="/partnerSponsors/create" class="btn btn-default">Adaugare Partener / Sponsor Nou</a> 
                </div> 
                @endif
            </div> 

            <table class="table table-bordered table-stripped"> 

                <tr> 

                    <th width="20">No</th> 

                    <th>Titlu</th> 

                    <th>Descriere</th> 

                    <th width="300">Actiune</th> 

                </tr> 

                @if (count($partnerSponsors) > 0) 

                    @foreach ($partnerSponsors as $key => $partnerSponsor) 

                        <tr> 

                            <td>{{ ++$i }}</td> 

                            <td>{{ $partnerSponsor->name }}</td> 

                            <td>{{ $partnerSponsor->email }}</td> 

                            <td>{{ $partnerSponsor->phone }}</td> 

                            <td> 

                                <a class="btn btn-success" href="{{ route('partnerSponsors.show', $partnerSponsor->id_sp) }}">Vizualizare</a> 
                                 @if (Auth::user()->admin === 1)
                                <a class="btn btn-primary" href="{{ route('partnerSponsors.edit', $partnerSponsor->id_sp) }}">Modificare</a> 

                                {{ Form::open(['method' => 'DELETE', 'route' => ['partnerSponsors.destroy', $partnerSponsor->id_sp], 'style' => 'display:inline']) }} 

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
            
            {{ $partnerSponsors->render() }} 

        </div> 

    </div> 

@endsection
