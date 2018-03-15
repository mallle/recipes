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
        
        foreach($recipes as $recipe)
        {
            $ingredients = [];
            foreach ($recipe->ingredients as $ingredient) {
                  $ingredients[] = [
                    'name' => $ingredient->name,
                    'amount' => $ingredient->pivot->amount,
                    'type' => $ingredient->pivot->type,
                  ];
            } 

            $descriptions = [];
            foreach ($recipe->descriptions as $description) {
                  $descriptions[] = [
                    'descriptionnumber' => $description->descriptionnumber,
                    'description' => $description->description,
                  ];
            } 

        	$data[] = [
        		'id' => $recipe->id,
        		'name' => $recipe->name,
                'persons' => $recipe->persons,
                'preparationtime' => $recipe->preparationtime,
                'resttime' => $recipe->resttime,
                'bakingtime' => $recipe->bakingtime,
                'effort' => $recipe->effort,
                'image' => $recipe->image,
                'description' => [
                        $descriptions
                    ],
                'ingredients' => [
                        $ingredients
                    ],
                'tags' => $recipe->tags
        	];

        }
        
        return  $data;
    }
}
