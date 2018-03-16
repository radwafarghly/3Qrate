@extends('layouts.app')
@section('title')

Project
@endsection
<head>
<style>






</style>





</head>

@section('content')

@include('user.slide')

</br>

<div class="container-fluid" style="text-align:center; background-color: purple;">

@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>
@endif
@foreach($unit as $unit)
        <div class="row">
          
        <div style="position:relative;">
                        <a class="btn btn-danger" href="{{ route('book',array('compound_name'=> $compound_name,'building_number'=> $unit->bu_num,'unit_number'=> $unit->number,'unit_id' => $unit->id)) }}">Book</a>

                        </div>
                       
              <div class="col-md-12">
                    <div class="word">
                      <div class="col-md-6">
                      
                         <h3 style="font-style:italic;  color:#09c;"> Size :<span style="color:#ccc;"> {{$unit->size }}</span></h3>
                         <h3 style="font-style:italic;  color:#09c;">  Price :<span style="color:#ccc;"> {{ $unit-> price }} </span> <span style="color:#ccc;"> LE </span></h3>
                         <h3 style="font-style:italic;  color:#09c;"> Rooms :<span style="color:#ccc;"> {{ $unit-> rooms }} </span></h3>
                         <h3 style="font-style:italic;  color:#09c;">Floor Number :<span style="color:#ccc;"> {{ $unit-> floor }} </span></h3>
                         
                         <h3 style="font-style:italic;  color:#09c;">City :<span style="color:#ccc;"> {{ $unit-> pro_city }} </span></h3>
                         </div>
                         <div class="col-md-6">

                         <h3 style="font-style:italic;  color:#09c;">Building Number :<span style="color:#ccc;"> {{ $unit-> bu_num }} </span></h3>
                         <h3 style="font-style:italic;  color:#09c;">Compound Name :<span style="color:#ccc;"> {{ $unit-> com_name }} </span> </h3>
                         <h3 style="font-style:italic;  color:#09c;">Project Name :<span style="color:#ccc;"> {{ $unit-> pro_name }} </span> </h3>
                         <h3 style="font-style:italic;  color:#09c;">Extra :<span style="color:#ccc;"> {{ $unit-> extra }} </span></h3>

                         </div>

                        
                     
                   </div>

               </div>

                     

</div>


           
      </div>
      @endforeach 
</div>


</br>

@endsection
