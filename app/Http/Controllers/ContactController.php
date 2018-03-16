<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;
use App\Project;
class ContactController extends Controller
{
    public function index(Request $request)
    {
        
       $contact = Contact::orderBy('id','DESC')->paginate(100);
       return view('admin.contact.index',compact('contact'))
       
                   ->with('i', ($request->input('page', 1) - 1) * 5);


    }
    public function create(){
        $projects=Project::with('compound')->get();
        
      /*  $projects=DB::table('projects')
        ->select('projects.name')->get();*/

        return view('user.contact',compact('projects'));

    	
    
        

    }
    public function store(Request $request)
    {
        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'message' => 'required'
            ]);
            
            Contact::create($request->all());


        return back()->with('success', 'Thanks for contacting us!');
    }



    public function destroy($id)
    {
        DB::table("contacts")->where('id',$id)->delete();
        
               return redirect()->route('contact.index')
        
                               ->with('success','Contact deleted successfully');
    }
}







