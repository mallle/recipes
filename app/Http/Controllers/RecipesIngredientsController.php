<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\RecipeIngredients;

class RecipesIngredientsController extends Controller
{
    public function attach(\Illuminate\Http\Request $request, $recipe_id)
    {
        $recipe = Recipe::find($recipe_id);

        $amount = RecipeIngredients::amount($request->get("amount"), $recipe_id);


        $ingredient_id = $request->get("ingredient_id");
        $array = [
                'amount' => $amount,
                'type' => RecipeIngredients::getTypeNumber($request->get('type'))   
            ];
      
        $recipe->ingredients()->attach($ingredient_id, $array);

        if ($recipe) 
        {
            return redirect('recipes/' . $recipe_id)->with(['message' => 'Attach was successful']);
        } 
        else
        {
            return back()->with(['message' => 'Error not atached!']);
        }
    }

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

}
