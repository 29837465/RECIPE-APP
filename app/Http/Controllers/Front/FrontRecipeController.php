<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontRecipeController extends Controller
{
    public function show(int $id)
    {
        return view('public.recipes');
    }

}