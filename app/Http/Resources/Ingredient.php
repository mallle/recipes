<?php

namespace App\Http\Resources;

use App\RecipeIngredients;
use Illuminate\Http\Resources\Json\Resource;

class Ingredient extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'name' => $this->name,
            'amount' => $this->pivot->amount,
            'type' => RecipeIngredients::getType($this->pivot->type),
          ];
    }
}
