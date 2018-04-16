<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;
use App\Project;

class BookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SELECT units.number As unit_num ,units.price AS unit_price , units.size As unit_size ,projects.name  As project_name ,compounds.name As compound_name ,compounds.location As compound_location, buildings.number As building_num from projects 
        // JOIN compounds ON projects.id = compounds.project_id
        // JOIN buildings ON compounds.id = buildings.compound_id 
        // JOIN units on buildings.id = units.building_id
        // WHERE units.user_id =1
/*        $projects=Project::with('compound')->get();
        $current_userid = \Auth::user()->id;        
        $book_unit=DB::table('projects')
        ->join('compounds','projects.id','=','compounds.project_id')
        ->join('buildings','compounds.id','=','buildings.compound_id')
        ->join('units','buildings.id','=','units.building_id')
        ->select('units.number As unit_num','units.price AS unit_price','units.size As unit_size','projects.name As project_name','compounds.name As compound_name','compounds.location As compound_location','buildings.number As building_num','units.id As unit_id')
        ->where('units.user_id',$current_userid)
        ->get();
        return view ('user.profile', compact('projects','book_unit'));

*/
    $projects=Project::with('compound')->get();
    $current_userid = \Auth::user()->id;

//    $user =DB::table('users')
//    ->select('users.name','users.email')
//    ->where('users.id',$current_userid)
//    ->get();
//
    $user=User::where('users.id',$current_userid)->get();

    $book_unit=DB::table('projects')
    ->join('compounds','projects.id','=','compounds.project_id')
    ->join('buildings','compounds.id','=','buildings.compound_id')
    ->join('units','buildings.id','=','units.building_id')
    ->join('books','books.unit_id','=','units.id')
    ->select('units.number As unit_num','units.price AS unit_price','units.size As unit_size','projects.name As project_name','compounds.name As compound_name','compounds.location As compound_location','buildings.number As building_num','units.id As unit_id','books.id AS book_id')
    ->where('books.user_id',$current_userid)
    ->get();


    return view ('user.profile', compact('projects','book_unit','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bookunit($compound_name,$building_number,$unit_number,$unit_id)
    {

        $current_userid =Auth::id;
        $check = DB::table('books')->where('unit_id','=', $unit_id)->where('user_id','=',$current_userid)->first();
        if ($check === null) {
    
            DB::table('books')->insert(
            ['user_id' => $current_userid , 'unit_id' =>$unit_id ,'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now() ]);
            return back()
            ->with('success','Unit Book successfully');
             }
        else{
            return back()
            ->with('success','Unit Booked');
        }

      //  $projects=Project::with('compound')->get();
        
        // $unit=DB::table('projects')
        // ->join('compounds','projects.id','=','compounds.project_id')
        // ->join('buildings','compounds.id','=','buildings.compound_id')
        // ->join('units','buildings.id','=','units.building_id')
        // ->select('units.id','units.number','units.size','units.price','units.floor','units.status','units.rooms','units.img','units.extra','projects.name AS pro_name','buildings.number AS bu_num','compounds.name As com_name','projects.governate AS pro_governate','projects.city AS pro_city')
        // ->where('buildings.number',$building_number)
        // ->where('compounds.name',$compound_name)
        // ->where('units.number',$unit_number)
        // ->get();

       // return view('user.showunits',compact('projects','unit_number','building_number','compound_name','unit'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletebook($book_id)
    {
        DB::table('books')->where('id',$book_id)->delete();
        
        return back()
            ->with('success','Book Delete successfully');
    }

    public function bookdetails()
    {


        // SELECT units.number As unit_num ,units.price AS unit_price , units.size As unit_size ,projects.name As project_name ,compounds.name As compound_name ,compounds.location As compound_location, buildings.number As building_num ,users.name, users.email 
        // from projects 
        // JOIN compounds ON projects.id = compounds.project_id
        //  JOIN buildings ON compounds.id = buildings.compound_id 
        //  JOIN units on buildings.id = units.building_id 
        //  JOIN books on books.unit_id =units.id 
        // JOIN users on books.user_id=users.id
        //   ORDER BY books.user_id

        $book_unit=DB::table('projects')
        ->join('compounds','projects.id','=','compounds.project_id')
        ->join('buildings','compounds.id','=','buildings.compound_id')
        ->join('units','buildings.id','=','units.building_id')
        ->join('books','books.unit_id','=','units.id')
        ->join('users','books.user_id','=','users.id')
        ->orderBy('books.user_id')
        ->select('units.number As unit_num','units.price AS unit_price','units.size As unit_size','projects.name As project_name','compounds.name As compound_name','compounds.location As compound_location','buildings.number As building_num','units.id As unit_id','books.id AS book_id','users.name','users.email')
        ->get();

        
        return view('admin.book.index',compact('book_unit'));
        
    }
}
