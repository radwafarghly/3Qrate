@extends('layouts.app')
@section('title')

My Profile
@endsection




@section('content')
<div class="container">
@foreach ($user as $key => $user)

<div style="margin-left:30px; margin-top:50px; text-align:center">
        <h1>Welcome To Your Profile </h1>
        <h2 style="color:#00c94a">Name  :<span>{{$user->name}}</span></h2> 
        <h2>Email :<span>{{$user->email}}</span></h2>
           


</div>
  @endforeach

<br>
<hr>
<div class="container">

@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Unit Number</th>
        <th>Unit Price</th>
        <th>Unit size</th>
        <th>building Number</th>
        <th>Project Name</th>
        <th>Compound Name</th>
        <th>Compound Location</th>
        <th>id</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($book_unit as $key => $book_unit)
      <tr>
        <td style="text-align: center;" href="{{ route('showunits',array('compound_name'=>$book_unit->compound_name,'building_number'=> $book_unit->compound_name,'unit_number'=>$book_unit->building_num)) }}">{{ $book_unit->unit_num }}</td>
        <td style="text-align: center;">{{ $book_unit->unit_price }}</</td>
        <td style="text-align: center;">{{ $book_unit->unit_size }}</</td>
        <td style="text-align: center;">{{ $book_unit->building_num }}</</td>
        <td style="text-align: center;">{{ $book_unit->project_name }}</</td>
        <td style="text-align: center;">{{ $book_unit->compound_name }}</</td>
        <td style="text-align: center;">{{ $book_unit->compound_location }}</</td>
        <td style="text-align: center;">{{ $book_unit->book_id }}</</td>

        <td>   
            <!-- <a class="btn btn-danger" href="{{ route('profile',array('unit_id'=>$book_unit->unit_id)) }}">Delete</a>   
                       -->
          <a class="btn btn-danger" href="{{ route('bookdelete',array('book_id'=>$book_unit->book_id)) }}">Delete</a>   


        </td>
      </tr>
    @endforeach

    </tbody>
  </table>
  </div>
</div>

</div>
@endsection


