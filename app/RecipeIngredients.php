<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recipe;

class RecipeIngredients extends Model
{
    const TYPE_GRAMM = 1;
    const TYPE_STÜCK = 2;
    const TYPE_TEELÖFFEL = 3;
    const TYPE_ESSLÖFFEL = 4;
    const TYPE_LITER = 5;
    const TYPE_DECILITER = 6;
    const TYPE_PACKUNG = 7;

    public static function amount($amount, $recipe_id)
    {
    	$recipe = Recipe::find($recipe_id);
    	$persons = $recipe->persons;
    	$amount = $amount;
    	return $amount/$persons;
    }


    public static function getTypeNumber($type)
    {
    	switch ($type) 
    	{
    		case 'Gramm':
    			return '1';
    		case 'Stück':
    			return '2';
    		case 'Teelöffel':
    			return '3';
    		case 'Esslöffel':
    			return '4';
    		case 'Liter':
    			return '5';
    		case 'Deciliter':
    			return '6';
    		case 'Packung':
    			return '7';
    		default:
    			return 'undefined';
    	}
    }

}
