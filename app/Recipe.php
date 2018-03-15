<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Ingredient;
use App\Description;
Use App\Equipment;

class Recipe extends Model
{

    //Relations
    public function equipments()
    {
        return $this -> belongsToMany('\App\Equipment', 'equipment_recipe', 'recipe_id', 'equipment_id');
    }

    public function tags()
    {
    	return $this -> belongsToMany('\App\Tag', 'recipe_tag', 'recipe_id', 'tag_id');
    }

    public function ingredients()
    {
    	return $this -> belongsToMany('\App\Ingredient', 'recipe_ingredient', 'recipe_id', 'ingredient_id')->withPivot('amount', 'type');
    }

    public function descriptions()
    {
    	return $this->hasMany('App\Description');
    }

    //Store and get Image
    public function getRecipePath()
    {
        return storage_path('app/public/recipes/');
    }
    
    protected function urlForRecipeImage($file)
    {
        return url('/storage/recipes/' . $file);
    }

    public function getImage() {
        return $this->urlForRecipeImage($this->image);
    }

    //calculate total preperationtime
    public function totalPreparationtime(){
        return $this->preparationtime+$this->resttime+$this->bakingtime;
    }

}
