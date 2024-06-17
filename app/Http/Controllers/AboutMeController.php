<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function about(){

        return view('about')
                ->with('name' , 'Jheron Vallangca')
                ->with('Date of Birth' , 'December 20, 2002')
                ->with('Place of Birth' , 'Baguio City')
                ->with('Age' , '21 Years Old')
                ->with('Gender' , 'Male')
                ->with('Civil' , 'Status Single')
                ->with('Citizenship' ,	'Filipino')
                ->with('F_Name' , 'Domingo H. Vallangca')
                ->with('M_Name' , 'Ronalyn D. Dela Cruz')
                ->with('Height' , '5’2')
                ->with('Weight' , '82 kgs.')
                ->with('Language' , 'Filipino');
       
    }
}
