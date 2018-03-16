<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Building;
use DB;

use App\Compound;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $building = Building::orderBy('id','DESC')->paginate(100);
       return view('admin.building.index',compact('building'))
       
                   ->with('i', ($request->input('page', 1) - 1) * 5);
    /*
    DB::table('users')
    ->join('contacts', function ($join) {
        $join->on('users.id', '=', 'contacts.user_id')
             ->where('contacts.user_id', '>', 5);
    })
    ->get();*/
  /*$building=DB::table('buildings')->join('compounds',function($join){
        $join->on('buildings.compound_id','=','compounds.id');
    }) ->select('*','buildings.id as b_id')->get();*/
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $compound = Compound::pluck('name','id');
        
             return view('admin.building.add',compact('compound'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         

        $this->validate($request, [
            'number' => 'required',
            'img' => 'required',
            'floorsnum' => 'required',
            'unitsnum' => 'required',
            'compound_id' => 'required'  
        ]);
        if($request->hasFile('img')){
            $filenameWithExtension=$request->file("img")->getClientOriginalName();
            
            $fileName=pathinfo( $filenameWithExtension,PATHINFO_FILENAME);
            
            $extension =$request->file("img")->getClientOriginalExtension();
            
            $fileNameStore=$fileName.'_'.time().'.'.$extension;
            
            $path=$request->file("img")->storeAs('public/image', $fileNameStore);
            
         }
         else{
            $fileNameStore='no_image.jpg';
         }
      
         $building = new Building;
                $building->number = $request->input('number');
                $building->floorsnum = $request->input('floorsnum');
                $building->unitsnum = $request->input('unitsnum');
                $building->compound_id = $request->input('compound_id');                
                $building->img = $request->input('img');
                $building->img=$fileNameStore;
                $building->save();
       // $input = $request->all();

       // $building = Building::create($input);

        return redirect()->route('building.index')

                        ->with('success','Building created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $building = Building::find($id);
        $compound = Compound::pluck('name','id');
        $compoundbuilding = $building->compound->pluck('id','id')->toArray();
        return view('admin.building.edit' , compact('building','compoundbuilding', 'compound'));
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
        $this->validate($request, [
            'number' => 'required',
            'img' => 'required',
            'floorsnum' => 'required',
            'unitsnum' => 'required',
            'compound_id' => 'required'  
        ]);
        if($request->hasFile('img')){
            $filenameWithExtension=$request->file("img")->getClientOriginalName();
            $fileName=pathinfo( $filenameWithExtension,PATHINFO_FILENAME);
            $extension =$request->file("img")->getClientOriginalExtension();
            $fileNameStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file("img")->storeAs('public/image', $fileNameStore);
        }
        else{
            $fileNameStore='public/image/no_image.jpg';
        }
       $building= Building::find($id);
       $building->number = $request->input('number');
       $building->floorsnum = $request->input('floorsnum');
       $building->unitsnum = $request->input('unitsnum');
       $building->compound_id = $request->input('compound_id');
       $building->img=$fileNameStore;
       $building->save();

      //  Building::find($id)->update($request->all());

        
        
                return redirect()->route('building.index')
                                ->with('success','Building updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("buildings")->where('id',$id)->delete();
        
               return redirect()->route('building.index')
        
                               ->with('success','Building deleted successfully');
    }
}
