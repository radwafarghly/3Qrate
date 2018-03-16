@extends('admin.layouts.layout')
@section('title')

Add Unit

@endsection
@section('header')



        




@endsection


@section('content')


<div class="content-header">
        <h1>
Add Compound
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="{{ url('/adminpanel/units') }}">Unit panel</a></li>
          <li class="active"><a href="{{ url('/adminpanel/units/create') }}"> Add new Unit </a></li>
        </ol>
        </div>

{{-- section table --}}
        <div class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Add new Unit</h3>
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

{!! Form::open(array('route' => 'unit.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Number</strong>
            {!! Form::number('number', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Size</strong>
            {!! Form::number('size', null, array('placeholder' => 'size','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price</strong>
            {!! Form::number('price', null, array('placeholder' => 'price','class' => 'form-control')) !!}
        </div>
    </div>

   
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Floor</strong>
            {!! Form::number('floor', null, array('placeholder' => 'floor','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image</strong>
            {!! Form::file('img', null, array('placeholder' => 'Image','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image Gallery</strong>
            <input type="file" name="unit_images[]" class="form-control" multiple>  
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>N.Rooms</strong>
            {!! Form::number('rooms', null, array('placeholder' => 'price','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Extra</strong>
            {!! Form::textarea('extra', null, array('placeholder' => 'Extra','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Building</label>
            <div class="col-md-6">
                {!! Form::select('building_id', $building,[], array('class' => 'form-control','multiple')) !!}
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
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


@section('footer')





 @endsection