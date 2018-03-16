@extends('admin.layouts.layout')

@section('header')

  <link rel="stylesheet" href="{{ asset ('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection


@section('content')


<section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/adminpanel')}}">
        <i class="fa fa-dashboard"></i> 
        Home</a>
        </li>
        <li class="active"><a href="{{ url('/adminpanel/users')}}">Tables</a></li>
      </ol>
    </section>

<div class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="bonameuser  x-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
 <div class="box-body">
       @if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

     </div>

@endif
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>nameuser</th>
                  <th>Email(s)</th>
                  <th>created at</th>
                  <th>control</th>

                </tr>
                </thead>
                <tbody>


    @foreach($contact as $contact)


                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{ $contact->name}}</td>
                    <td>{{ $contact->email}}</td>
                    <td>{{ $contact->message}}</td>
                  
                    <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['contact.destroy', $contact->id],'style'=>'display:inline']) !!}  
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}               
                    </td>
                    </tr>
    @endforeach



                    </tbody>
                  
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </div>
       </div>
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