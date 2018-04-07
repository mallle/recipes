<?php

namespace App\Http\Controllers;

use App\Description;
use Illuminate\Http\Request;

class DescriptionIngredientController extends Controller
{
    public function detach($description_id, $ingredient_id)
    {

        $description = Description::find($description_id);

        $description->ingredients()->detach($ingredient_id);

        if ($recipe)
        {
            return back()->with(['message' => 'Detach was successful']);
        }
        else
        {
            return back()->with(['message' => 'Error not detached!']);
        }

    }

    public function attach(\Illuminate\Http\Request $request, $description_id)
    {
        $description = Description::find($description_id);

        $ingredient_id_type = explode(',', $request->get("ingredient_id"));

        $ingredient_id = $ingredient_id_type[0];

            $array = [
                'amount' => $request->get("amount"),
                'type' => $ingredient_id_type[1]
            ];
      
            $description->ingredients()->attach($ingredient_id, $array);

            return redirect('descriptions/' . $description_id)->with(['success' => 'Attach was successful']);

    }
}
