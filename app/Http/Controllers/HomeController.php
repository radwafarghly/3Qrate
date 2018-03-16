<?php

namespace App\Http\Controllers;

use DB;
use App\Project;
use Request;

class HomeController extends Controller
{


    public function search(Request $request)
{
 $projects=Project::with('compound')->get();
   $query = Request::input('search');
  $testsearch=DB::table('projects')
  ->join('compounds','projects.id','=','compounds.project_id')
  ->join('buildings','compounds.id','=','buildings.compound_id')
  ->join('units','buildings.id','=','units.building_id')
  ->select('units.id','units.number AS un_num','units.size','units.price','units.floor','units.rooms','units.img','units.extra','projects.name AS pro_name','buildings.number AS bu_num','compounds.name as com_name','projects.governate AS pro_governate','projects.city AS pro_city')
  ->where('projects.city', 'LIKE', '%' . $query . '%')
  ->orWhere('projects.governate', 'LIKE', '%' . $query . '%')->get();
  return view('search.test', compact('testsearch', 'query','projects'));
 }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /* public function __construct()
    {
        $this->middleware('auth');
    } 
  */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // SELECT projects.name FROM projects
       /* SELECT compounds.name
       FROM projects 
       JOIN compounds ON compounds.project_id=projects.id
       WHERE projects.name='نتتااااااااالاتنمك'
      */
/*SELECT units.id , units.number as un_num ,units.size ,units.price,units.img ,compounds.name as com_name,buildings.number as bu_num 
from units 
JOIN buildings on buildings.id =units.building_id 
JOIN compounds on compounds.id =buildings.compound_id
where units.price >= 100000
*/
    $units=DB::table('units')
    ->join('buildings','buildings.id','=','units.building_id')
    ->join('compounds','compounds.id','=','buildings.compound_id')
    ->select('units.id','units.number AS un_num','units.size','units.price','units.img','compounds.name AS com_name','buildings.number AS bu_num')
    ->limit(12)
  
    ->get();
      

    #query 2


        $projects = Project::with('compound')->get();
        return view('home',compact('projects','units'));

       
     /*   $compounds=DB::table('compounds')
        ->join('projects','compounds.project_id','=','projects.id')
        ->select('compounds.name AS comp_name')
       ->where('projects.name','radwa')        
        ->get();*/
        /*select compounds.name from compounds ,projects WHERE compounds.project_id =projects.id and projects.name='radwa'
*/

    }
}
