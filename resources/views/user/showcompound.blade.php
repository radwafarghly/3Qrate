@extends('layouts.app')
@section('title')

Project
@endsection
<head>
<style>
.word{

    margin-top:50px
}

.pro{

    width:90%;
      height:300px; 
      margin:30px 0px;
}
.detail{

    text-align:center;
}










</style>









@section('content')


<div class="container-fluid" style="text-align:center; background-color: purple;">
@foreach($compound as $compound)
      <div class="row">
            <div class="col-md-6">
            <div  class="word">


            <h3 style="font-style:italic;  color:#09c;"> Compound Name :<span style="color:#ccc;"> {{ $compound_name }} </span></h3>
            <h3 style="font-style:italic;  color:#09c;"> Compound Location :<span style="color:#ccc;"> {{ $compound-> location }}</span></h3>
            </div>


           </div>
            <div class="col-md-6">
                      <img class ="pro" src="{{ asset('/storage/image/'.$compound->img) }}"> 
            </div>
      </div>
@endforeach
</div>

{{--
@foreach($units as $unit)
                        <h1> compound Name :<span> {{$unit->size }}</span></h1>
                        <h2>  location : <span> {{ $unit-> price }} </span></h2>
                        <h2> img:<span> {{ $unit-> img }} </span></h2>
@endforeach --}}

<!-- SLIDER -->



<div style="background-color:purple;" class="container-fluid">
<div class="row">
    <h2 style="color:#fff;" class="detail">{{$compound_name  }} Units</h2>
  </div>
<div class='row'>
        <div class='col-md-12'>

                    @foreach ($units->chunk(3) as $key => $chunk)
          <div class="row">

    @foreach($chunk as $unit)

        <div class="col-xs-12 col-sm-4">
            <div class="card">
                <a class="img-card" href="{{ route('showunits',array('compound_name'=>$compound_name,'building_number'=> $unit->bu_num,'unit_number'=>$unit->number)) }}"><img  alt="" src="{{ asset('/storage/image/'.$unit->img) }}"></a>
               
                <br />
                <div class="card-content">
                    <h4 class="card-title">
                        <a style="color:#fff;">
                        {{$unit->price }}$
                        </a>
                    </h4>
                    <div style="color:#fff;" class="card-title">
                    {{$unit->size }}M
                    </div>
                </div>
                <div class="card-read-more">
                    <a class="btn btn-link btn-block" href="{{ route('showunits',array('compound_name'=>$compound_name,'building_number'=> $unit->bu_num,'unit_number'=>$unit->number)) }}">
                        View Details
                    </a>
                </div>
            </div>
        </div>
        @endforeach  
     </div>
     @endforeach
   </div>
 </div>
</div>
      





@endsection

