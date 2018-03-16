<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;
use Hash;
use Redirect;
use Datatables;
use App\Http\Requests\AddUserRequestAdmin;

class UsersController extends Controller
{
    public function index(User $user){
        $user = $user->all();

        return view('admin.user.index', compact('user'));
    }


    public function create()

    {

        $roles = Role::pluck('display_name','id');

        return view('admin.user.add',compact('roles'));

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

            'name' => 'required',

            'email' => 'required|email|unique:users,email',

            'password' => 'required|same:confirm-password',

            'roles' => 'required'

        ]);


        $input = $request->all();

        $input['password'] = Hash::make($input['password']);


        $user = User::create($input);

        foreach ($request->input('roles') as $key => $value) {

            $user->attachRole($value);

        }


        return redirect()->route('users.index')

                        ->with('success','User created successfully');

    }

    #Edit Users


    public function edit($id){
        
        $user = User::find($id);
        $roles = Role::pluck('display_name','id');
        $userRole = $user->roles->pluck('id','id')->toArray();
        return view('admin.user.edit' , compact('user' , 'id' , 'roles' , 'userRole'));
    }

    public function update(Request $request, $id)

    {

        $this->validate($request, [

            'name' => 'required',

            'email' => 'required|email|unique:users,email,'.$id,

            'password' => 'same:confirm-password',
            
            'roles' => 'required'

          

        ]);


        $input = $request->all();

        if(!empty($input['password'])){ 

            $input['password'] = Hash::make($input['password']);

        }else{

            $input = array_except($input,array('password'));    

        }


        $user = User::find($id);

        $user->update($input);
        DB::table('role_user')->where('user_id',$id)->delete();
        foreach ($request->input('roles') as $key => $value) {
        $user->attachRole($value);

        }
       

        return redirect()->route('users.index')

                        ->with('success','User updated successfully');

    }


    #Show Users

    public function show($id)

    {

        $user = User::find($id);

        return view('admin.user.index',compact('user'));

    }

    #Update user
    public function passwordupdate(Request $request , User $user){

        $userupdate = $user->find($request->user_id);
        $password = bcrypt($request->password);
        $userupdate->fill(['password' => $password])->save();

        return Redirect::back()->withFlashMessage('Password updated succefully');
    }

    #DElete user
     
    public function destroy($id , User $user){

        if($user->id != 1){

            $user->find($id)->delete();
            return redirect('/adminpanel/users')->withFlashMessage('user deleted succefully');

        }else{
        return redirect('/adminpanel/users')->withFlashMessage('can`t delete user');

         }
    }

    #function Ajax

    public function anyData(User $user)
    {

      $users = $user->all();

        return Datatables::of($users)

            ->editColumn('name', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id . '/edit').'">'.$model->name.'</a>';
            })
            ->editColumn('admin', function ($model) {
                return $model->admin == 0 ? '<span class="badge badge-info">' . 'member' . '</span>' : '<span class="badge badge-warning">' . 'admin ' . '</span>';
            })


            ->editColumn('mybu', function ($model) {
                return '<a href="'.url('/adminpanel/bu/' . $model->id).'"> <span class="btn btn-danger btn-circle"> <i class="fa fa-link"></i> </span> </a>';
            })
            
            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i> Edit</a> ';
                if($model->id != 1){
                    $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i> Delete</a>';
                }
                return $all;
            })
            ->make(true);

    }
}
