<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recipe;

class RecipeController extends Controller
{
    public function find()
    {
        $data = [];

        $recipes = Recipe::orderBy('name')->get();

		// return $categories;        

        foreach($recipes as $recept)
        {
        	$data[] = [
        		'id' => $recept->id,
        		'name' => $recept->name,
                'persons' => $recept->persons,
                'description' => $recept->descriptions,
                'zutaten' => $recept->ingredients,
                'tags' => $recept->tags
        	];

        }
        
        return  $data;
    }
}
