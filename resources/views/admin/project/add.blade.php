@extends('admin.layouts.layout')
@section('title')

Add project

@endsection
@section('header')



        




@endsection


@section('content')


<div class="content-header">
        <h1>
Add project
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ url('/adminpanel/projects') }}">project control</a></li>
          <li class="active"><a href="{{ url('/adminpanel/projects/create') }}"> Add new project </a></li>
        </ol>
        </div>

{{-- section table --}}
        <div class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Add new project</h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">

                   
                                  
	@if (count($errors) > 0)

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

{!! Form::open(array('route' => 'project.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
       
        <div class="form-group">

            <strong>Governate</strong>

            {!! Form::text('governate', null, array('placeholder' => 'Governate','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>City</strong>

            {!! Form::text('city', null, array('placeholder' => 'City','class' => 'form-control' )) !!}
            

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Image</strong>

            
            
            {!! Form::file('img', null, array('placeholder' => 'Image','class' => 'form-control')) !!}
           
           
            

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Add</button>

</div>

{!! Form::close() !!}

                  


                      </div>
                    </div>
                </div>
            </div>
        </div>






 <!-- /.content -->
 @endsection

