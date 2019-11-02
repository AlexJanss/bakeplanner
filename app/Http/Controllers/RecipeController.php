<?php


namespace App\Http\Controllers;


use App\Recipes;

class RecipeController
{

    public function create(Request $request)
    {
        $recipe = new Recipes();
        $recipe->
        $product->name = 'God of War';
        $product->price = 40;

        $product->save();

        $category = Category::find([3, 4]);
        $product->categories()->attach($category);

        return 'Success';
    }

}