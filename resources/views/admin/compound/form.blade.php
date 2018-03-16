                               
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

{!! Form::open(array('route' => 'project.store','method'=>'POST')) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
       
        <div class="form-group">

            <strong>Location</strong>

            {!! Form::text('location', null, array('placeholder' => 'Location','class' => 'form-control')) !!}

        </div>

    </div>

   
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Image</strong>

            {!! Form::text('img', null, array('placeholder' => 'Image','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Add</button>

</div>

{!! Form::close() !!}
