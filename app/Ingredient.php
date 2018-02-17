<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recipe;

class Ingredient extends Model
{
    public function recipes()
    {
    	$this -> belongsToMany('\App\Recipe', 'ingredient_recipe', 'ingredient_id', 'recipe_id');
    }
}
