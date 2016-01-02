<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class inscription extends Model
{
    
	public $table = "inscriptions";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nom",
		"prenom",
		"tel",
		"email",
		"etablissement"
	];

	public static $rules = [
	    "nom" => "required",
		"prenom" => "required",
		"tel" => "required",
		"email" => "required|email",
		"etablissement" => "required"
	];

}
