@extends('app')

@section('content')
<div>
    <div class="col-md-offset-2 col-md-8 style-background" style="padding-top: 16px">
        <p class="text-center" style="font-size: 30px;">
          Merci {!!$inscription->prenom!!} {!!$inscription->nom!!} pour votre inscription.
        </p>
   </div>
</div>
  <div style="    position: fixed;bottom: 0;width: 100%;">
	    <footer class="text-center " style="padding-top: 20px">
	            <img src="{{ url('img/photoshop2.jpg')}}" class="center-block img-responsive"/>
	    <footer>
    </div>
@endsection