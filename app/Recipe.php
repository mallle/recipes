<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Ingredient;

class Recipe extends Model
{
    public function tags()
    {
    	$this -> belongsToMany('\App\Tag', 'recipe_tag', 'recipe_id', 'tag_id');
    }

    public function ingredients()
    {
    	$this -> belongsToMany('\App\Ingredient', 'recipe_ingredient', 'recipe_id', 'ingredient_id');
    }
}
