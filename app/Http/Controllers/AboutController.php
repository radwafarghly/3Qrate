<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;

class AboutController extends Controller
{

    public function index(){

      /*  $projects=DB::table('projects')
        ->select('projects.name')->get();*/
        $projects=Project::with('compound')->get();
        

        return view('user.about',compact('projects'));
        
        

    }
}
