@extends('admin.layouts.layout')
@section('title')

Add user

@endsection
@section('header')



        




@endsection


@section('content')


<div class="content-header">
        <h1>
Add member
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ url('/adminpanel/users') }}">User panel</a></li>
          <li class="active"><a href="{{ url('/adminpanel/users/create') }}"> Add new user </a></li>
        </ol>
        </div>

{{-- section table --}}
        <div class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Add new user</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">

                   
                        {!! Form::open( ['method' => 'post','url' => '/adminpanel/users/']) !!}
         @include('admin.user.form')

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