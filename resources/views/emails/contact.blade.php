<!DOCTYPE html>
<html>
    <head>
        <title>workshop</title>
    </head>
    <body>    
	<p style="white-space: pre ;color: red;">
         workshop nbr {!!$nbr!!}
	</p>
                 <table class="table">
                    <thead>
                    <th>Nom</th>
					<th>Prenom</th>
					<th>Tel</th>
					<th>Email</th>
					<th>Etablissement</th>
                    
                    </thead>
                    <tbody>
                     
                    @foreach($inscriptions as $inscription)
                        <tr>
                            <td>{!! $inscription->nom !!}</td>
					<td>{!! $inscription->prenom !!}</td>
					<td>{!! $inscription->tel !!}</td>
					<td>{!! $inscription->email !!}</td>
					<td>{!! $inscription->etablissement !!}</td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>

    </body>
</html>
