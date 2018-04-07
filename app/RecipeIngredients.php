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
    const TYPE_MILLILITER = 7;
    const TYPE_PACKUNG = 8;
    const TYPE_SCHEIBE = 9; 

    public static function amountOnePerson($amount, $recipe_id)
    {
    	$recipe = Recipe::find($recipe_id);
    	$persons = $recipe->persons;
    	$amount = $amount;
    	return $amount/$persons;
    }

    public static function amountPersons($amount, $recipe_id)
    {
    	$recipe = Recipe::find($recipe_id);
    	$persons = $recipe->persons;
    	$amount = $amount;
    	return $amount*$persons;
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
    		case 'Milliliter':
    			return '7';
    		case 'Packung':
    			return '8';
            case 'Scheibe':
                return '9';
    		default:
    			return 'undefined';
    	}
    }

}
