<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        $movie = Movie::all();
        return view('movies.index', compact('movie'));
    }
}
