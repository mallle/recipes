<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recipe;

class Equipment extends Model
{
    public function recipes()
    {
    	return $this -> belongsToMany('\App\Recipe', 'recipe_equipment', 'equipment_id', 'recipe_id');
    }

}
