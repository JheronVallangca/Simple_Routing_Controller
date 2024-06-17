<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobbiesMe(){

        return view('hobbies')
                ->with('guitar' , 'Playing Guitar, Ukulele, Bass, Organ')
                ->with('games' , 'Mobile Games, TRIPLE A Games')
                ->with('movies' , 'Horror Movies, Comedy, Action, Romantic')
                ->with('sports' , 'Basketball, Chess');
    }
}

