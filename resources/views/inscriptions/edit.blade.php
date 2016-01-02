@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($inscription, ['route' => ['inscriptions.update', $inscription->id], 'method' => 'patch']) !!}

        @include('inscriptions.fields')

    {!! Form::close() !!}
</div>
@endsection
