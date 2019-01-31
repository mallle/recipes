<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Recipe extends Resource
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
                'id' => $this->id,
        		'name' => $this->name,
                'persons' => $this->persons,
                'preparationtime' => $this->preparationtime,
                'resttime' => $this->resttime,
                'bakingtime' => $this->bakingtime,
                'effort' => $this->effort,
                'image' => url('/storage/recipes/' . $this->image),
//                'descriptions' =>
//                'ingredients' =>
//                'tags' =>
        ];
    }
}
