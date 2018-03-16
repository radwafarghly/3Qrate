@extends('admin.layouts.layout')

@section('title')

All roles
@endsection

@section('header')

<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

@endsection

@section('content')

<div class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
              <table id="role" class="table table-bordered table-hover">
                  

                 
	@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif

<table id="example2" class="table table-bordered">
<thead>

    <tr>

        <th>No</th>

        <th>Name</th>


        <th>Description</th>

        <th width="280px">Action</th>

    </tr>
    </thead>
    <tbody>

@foreach ($role as $key => $role)

<tr>

    <td>{{ ++$i }}</td>

    <td>{{ $role->display_name }}</td>

    <td>{{ $role->description }}</td>

    <td>


        <a class="btn btn-primary" href="{{ route('role.edit',$role->id) }}">Edit</a>




        {!! Form::open(['method' => 'DELETE','route' => ['role.destroy', $role->id],'style'=>'display:inline']) !!}

        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

        {!! Form::close() !!}



    </td>

</tr>
</tbody>


@endforeach

</table>



              


                       
                </table>
          </div>
          
          
          <!-- /.box-body -->
        </div>
        
        
        
        </div>
      <!-- /.col -->
    </div>
    
    
    <!-- /.row -->

    
  </div>

@endsection


@section('footer')

<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script>

$('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })

</script>

@endsection





