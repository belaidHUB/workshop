@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'inscriptions.store']) !!}

        @include('inscriptions.fields')

    {!! Form::close() !!}
</div>
@endsection
