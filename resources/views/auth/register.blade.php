@extends('app')

@section('content')
<div class="row">
    <div class="col-md-offset-4 col-md-4 style-background" style="padding-top: 16px">
    <form method="POST" action="{{ url('auth/register')}}">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
           <label for="name">email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="name">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-group">
            <label for="name">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success pull-right">Register</button>
        </div>
    </form>
   </div>
</div>
@endsection