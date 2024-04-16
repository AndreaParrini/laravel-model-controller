<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function movies()
    {
        $movies = Movie::all();
        /* dd($movies); */
        return view('movies', compact('movies'));
    }
}
