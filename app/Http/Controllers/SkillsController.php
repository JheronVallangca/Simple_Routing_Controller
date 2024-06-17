<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function skillsMe(){

        return view('skills')
                ->with('first' , 'Knowledge in programming / scripting language: Java, Python, Low code (Adalo), HTML, CSS, WordPress, SAP ABAP')
                ->with('second' , 'Knowledgeable in MS Office Tools: Word, Excel, PowerPoint')
                ->with('third' , 'Flexible individual and team player who functions well in a fast-paced work environment.')
                ->with('fourth' , 'Strong verbal and personal communication skills')
                ->with('fifth' , 'Adaptable and committed to learning new skills and knowledge for professional growth and development.')
                ->with('sixth' , 'Flexible individual and team player who functions well in a fast-paced work environment.');
    }
}

