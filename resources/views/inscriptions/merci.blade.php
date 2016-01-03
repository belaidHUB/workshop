@extends('app')

@section('content')
<div>
    <div class="col-md-offset-2 col-md-8 style-background" style="padding-top: 16px">
        <p class="text-center" style="font-size: 30px;">
          Merci <b>{!!$inscription->prenom!!} {!!$inscription->nom!!}</b> votre inscription a bien été prise en compte!
        </p>
        <p class="text-center" style="font-size: 26px;font-style: italic;">
          Pour plus d'informations contactez nous :</br></br>
              -Rachid Berghout : <b>0626268348</b></br>
              -Ikram El ouafi : <b>0678791971</b></br>
              -Mehdi ziani : <b>0633302476</b></br>
        </p>
   </div>
</div>
  <div style="    position: fixed;bottom: 0;width: 100%;">
	    <footer class="text-center " style="padding-top: 20px">
	            <img src="{{ url('img/photoshop2.jpg')}}" class="center-block img-responsive"/>
	    <footer>
    </div>
@endsection