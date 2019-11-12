<?php


namespace App\Http\Controllers;


use App\Ingredient;
use App\Recipe;
use Illuminate\Support\Facades\Auth;

class RecipeController
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $recipe = new Recipe();
        $recipe->name = $request->input('recipe_name');
        $recipe->user_id = Auth::user()->id;

        $recipe->save();

        //input ingredients is a key value array id => name
        //returns array of IDS
        $ingredients = Ingredient::findOrCreate($request->input('ingredients'));
        $recipe->ingredients()->attach($ingredients);

        return response()->json();
    }

}