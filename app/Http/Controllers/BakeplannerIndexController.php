<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class BakeplannerIndexController extends Controller
{

    public function index(Request $request){

        return Inertia::render('Home', [
                'test' => 'no-login'
        ]);
    }
}
