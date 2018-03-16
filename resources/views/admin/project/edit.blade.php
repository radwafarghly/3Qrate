@extends('admin.layouts.layout')
@section('title')

Edit project

@endsection
 

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit project</h2>

        </div>

     

    </div>

</div>

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

{!! Form::model($project, ['method' => 'PATCH','route' =>['project.update', $project->id],'enctype'=>'multipart/form-data']) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','enctype'=>'multipart/form-data')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Governate:</strong>

            {!! Form::textarea('governate', null, array('placeholder' => 'Governate','class' => 'form-control','style'=>'height:100px')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>City:</strong>

            {!! Form::text('city', null, array('placeholder' => 'City','class' => 'form-control','style'=>'height:100px')) !!}


         

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
    
                <strong>Image:</strong>
    
                {!! Form::file('img', null, array('placeholder' => 'Image','class' => 'form-control','style'=>'height:100px')) !!}
    
    
             
    
            </div>
    
        </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>

{!! Form::close() !!}

@endsection