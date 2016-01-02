<div class="style-background" style=" min-height:450px ;margin-top: 4%;">
 
<div class="col-md-6">
   <p style="padding: 30px;text-indent: 6%;">
    <span style="font-style: italic;font-size: 20px;">
    Voulez vous apprendre les basics du Photoshop, l'incontournable logiciel de retouche photo d'Adobe ?</span>
    </br></br><b>ENACTUS FSTG Marrakech en collaboration avec club IRISI </b>, vous offre l'opportunité d'en profiter d'une formation qui va vous permettre de se familiariser avec le logiciel de retouche d'image et d'apprendre les fonctions de base pour améliorer, modifier et enrichir des images numériques dans le monde. Photoshop est indispensable dans de nombreuses professions comme le graphisme, le motion design, le design web ainsi que tous les métiers de l'audiovisuel. Bien souvent, maîtriser Photoshop est presque aussi essentiel que d'utiliser un logiciel de traitement de texte ! 
    </br></br></br><b style="font-style: italic;color: green;font-size: 26px;float: right;">
    Alors ne ratez pas cette chance.</b>
    </p>

</div>
<div class="col-md-6">
<!--- Nom Field --->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!--- Prenom Field --->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<!--- Tel Field --->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tel', 'Tel:') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!--- Etablissement Field --->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('etablissement', 'Etablissement:') !!}
    {!! Form::text('etablissement', 'fstg', ['class' => 'form-control']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit("S'inscrire", ['class' => 'btn btn-success' ,'style' =>'border-radius:0px;font-size: 20px']) !!}
</div>
</div>
</div>
<div style="    position: fixed;bottom: 0;width: 100%;">
        <footer class="text-center " style="padding-top: 20px">
                <img src="{{ url('img/photoshop2.jpg')}}" class="center-block img-responsive"/>
        <footer>
 </div>