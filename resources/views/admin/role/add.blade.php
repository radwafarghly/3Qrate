@extends('admin.layouts.layout')
@section('title')

Add role

@endsection
@section('header')



        




@endsection


@section('content')


<div class="content-header">
        <h1>
Add role
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ url('/adminpanel/users') }}">User panel</a></li>
          <li class="active"><a href="{{ url('/adminpanel/users/create') }}"> Add new role </a></li>
        </ol>
        </div>

{{-- section table --}}
        <div class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Add new role</h3>
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

{!! Form::open(array('route' => 'role.store','method'=>'POST')) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        
        <div class="form-group">

            <strong>Display Name:</strong>

            {!! Form::text('display_name', null, array('placeholder' => 'Display Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Description</strong>

            {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Permission:</strong>

            <br/>

            @foreach($permission as $value)

                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}

                {{ $value->display_name }}</label>

                <br/>

            @endforeach

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

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