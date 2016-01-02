@extends('app')

@section('content')
    <div class="container style-background" style=" min-height:200px ;">

        @include('flash::message')

        <div class="row">

            <h1 class="pull-left">inscriptions : </h1>
            <h1 class="pull-left bg-success text-center" style="min-width: 100px;color: white;background-color: #D9534F;">
            {!!$nbr!!}
            </h1>
            <a class="btn btn-danger pull-right" style="margin-top: 25px;margin-right: 15px;border-radius:0px ;margin-left: 10px;" href="{{ url('auth/logout')}}">Deconnexion</a>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('inscriptions.create') !!}">Add New</a>
        </div>
        
        <div class="row">
            @if($inscriptions->isEmpty())
                <div class="well text-center">No inscriptions found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Nom</th>
			<th>Prenom</th>
			<th>Tel</th>
			<th>Email</th>
			<th>Etablissement</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($inscriptions as $inscription)
                        <tr>
                            <td>{!! $inscription->nom !!}</td>
					<td>{!! $inscription->prenom !!}</td>
					<td>{!! $inscription->tel !!}</td>
					<td>{!! $inscription->email !!}</td>
					<td>{!! $inscription->etablissement !!}</td>
                            <td>
                                <a href="{!! route('inscriptions.edit', [$inscription->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('inscriptions.delete', [$inscription->id]) !!}" onclick="return confirm('Are you sure wants to delete this inscription?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection