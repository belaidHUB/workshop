<?php

namespace App\Libraries\Repositories;


use App\Models\inscription;
use Illuminate\Support\Facades\Schema;

class inscriptionRepository
{

	/**
	 * Returns all inscriptions
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return inscription::all();
	}

	public function search($input)
    {
        $query = inscription::query();

        $columns = Schema::getColumnListing('inscriptions');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores inscription into database
	 *
	 * @param array $input
	 *
	 * @return inscription
	 */
	public function store($input)
	{
		return inscription::create($input);
	}

	/**
	 * Find inscription by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|inscription
	 */
	public function findinscriptionById($id)
	{
		return inscription::find($id);
	}

	/**
	 * Updates inscription into database
	 *
	 * @param inscription $inscription
	 * @param array $input
	 *
	 * @return inscription
	 */
	public function update($inscription, $input)
	{
		$inscription->fill($input);
		$inscription->save();

		return $inscription;
	}
}