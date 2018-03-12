<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipesIngredientsController extends Controller
{
    public function detach($recipe_id, $ingredient_id)
    {

        $recipe = Recipe::find($recipe_id);

        $recipe->ingredients()->detach($ingredient_id);

        if ($recipe) 
        {
            return back()->with(['message' => 'Detach was successful']);
        } 
        else 
        {
            return back()->with(['message' => 'Error not detached!']);
        }

    }

        public function attach(\Illuminate\Http\Request $request, $recipe_id)
    {
        $recipe = Recipe::find($recipe_id);

        $ingredient_id = $request->get("ingredient_id");

        if (! $recipe->ingredients()->syncWithoutDetaching([$ingredient_id]))
        {
            $recipe->ingredients()->attach($ingredient_id);
        }

        if ($recipe) 
        {
            return redirect('recipes/' . $recipe_id)->with(['message' => 'Attach was successful']);
        } 
        else
        {
            return back()->with(['message' => 'Error not atached!']);
        }

    }
}
