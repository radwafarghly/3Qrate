@extends('admin.layouts.layout')
@section('title')

Edit user
{{ $user->name }}
@endsection
@section('header')



        




@endsection


@section('content')


<div class="content-header">
        <h1>
            Edit user
           
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ url('/adminpanel/users') }}">User panel</a></li>
          <li class="active"><a href="{{ url('/adminpanel/users/edit') }}"> Edit user </a></li>
        </ol>
        </div>

{{-- section table --}}
        <div class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">
                          Edit user
                           </h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">

                   
                        {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
                        

                            @include('admin.user.form')

                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Select roles</label>

                            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}

                            {!! Form::close() !!}

                        {!! Form::close() !!}

                    


                      </div>
                    </div>
                </div>
            </div>
        </div>





{{-- section table --}}
        <div class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">
                          Change "{{ $user->name }}" password
                           </h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">

                   
                        
                          
                          {!! Form::open( ['method' => 'post','url' => '/adminpanel/users/changepassword/']) !!}
                  <input type="hidden" value="{{  $user->id }}" name="user_id">
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                  
                              <div class="col-md-6">
                                      {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                  
                                  @if ($errors->has('password'))
                                      <span class="invalid-feedback">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                             
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      Change Password
                                  </button>
                                  @if($user->id != 1)
                                  <a href="' . url('/adminpanel/users/' . $user->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>
                                  @endif
                              </div>
                          </div>
                          
                  
                          
                  
                      {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

                  





 <!-- /.content -->
 @endsection


@section('footer')





 @endsection