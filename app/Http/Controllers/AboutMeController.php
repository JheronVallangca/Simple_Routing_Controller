<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function aboutMe(){

        return view('About')
                ->with('name' , 'Jheron Vallangca')
                ->with('dateOfBirth' , 'December 20, 2002')
                ->with('placeOfBirth' , 'Baguio City')
                ->with('age' , '21 Years Old')
                ->with('gender' , 'Male')
                ->with('civilStatus' , 'Single')
                ->with('citizenship' ,	'Filipino')
                ->with('f_Name' , 'Domingo H. Vallangca')
                ->with('m_Name' , 'Ronalyn D. Dela Cruz')
                ->with('height' , '5’7')
                ->with('weight' , '82 kgs.')
                ->with('language' , 'Filipino'); 
    }
}
