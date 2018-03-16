<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SiteSetting;

class SiteSettingsController extends Controller
{
    public function index(SiteSetting $SiteSettings)
    {
        $SiteSettings = SiteSetting::all();
        return view('admin.sitesetting.index' , compact('SiteSettings'));
    }

    #store

    public function store(Request $request){
        foreach($request->toArray() as $req){
            echo $req . '</br>';
        }
/*
        foreach(array_except($request , ['_token'. 'submit']) as $req){
        $sitesettingupdate = SiteSetting::where('namesettings')->get();
        $sitesettingupdate->fill(['value' => $req]) ->save();

        }
        return Redirect::back()->withFlashMessage('Settings saved succefully');
      */
    }
}
