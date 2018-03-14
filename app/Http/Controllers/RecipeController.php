<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use App\Tag;
use App\Recipe;
use App\RecipeIngredients;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::orderBy('name')->get();

        return view('recipes.index', [
            'recipes' => $recipes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = Ingredient::orderBy('name')->get();
        $tags = Tag::orderBy('type')->get();

        return view('recipes.create', [
            'ingredients' => $ingredients,
            'tags' => $tags
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = new Recipe;

        $recipe->name = $request->get('name');
        $recipe->persons = $request->get('persons');
        $recipe->description = $request->get('description');
        $recipe->time = $request->get('time');

        $recipe->save();

        return redirect('recipes');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        $tags = Tag::orderBy('name')->get();
        $ingredients = Ingredient::orderBy('name')->get();

        return view('recipes.show', [
            'recipe' => $recipe,
            'tags' => $tags,
            'ingredients' => $ingredients
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
