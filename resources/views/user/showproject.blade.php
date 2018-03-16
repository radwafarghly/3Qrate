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
      margin:30px 0px
}
.detail{

    text-align:center;
}



/*Slider*/








</style>


<script>
/*Slider*/


$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});




</script>




</head>

@section('content')


<div class="container-fluid" style="text-align:center; background-color: purple;">
@foreach($project as $project)
      <div class="row">
            <div class="col-md-6">
                <div class="word">

                <h3 style="font-style:italic;  color:#09c;"> Project Name :<span style="color:#ccc;"> {{ $project_name }} </span></h3>
                <h3 style="font-style:italic;  color:#09c;"> Project City :<span style="color:#ccc;"> {{ $project-> city }}</span></h3>
                
                </div>

           </div>
            <div class="col-md-6">
                      <img class ="pro" src="{{ asset('/storage/image/'.$project->img) }}" > 
            </div>
      </div>
@endforeach
</div>
{{--
@foreach($compounds as $compound)
                        <h1> compound Name :<span> {{$compound->name }}</span></h1>
                        <h2>  location : <span> {{ $compound-> location }} </span></h2>
                        <h2> img:<span> {{ $compound-> img }} </span></h2>
@endforeach

@foreach ($compounds->chunk(3) as $chunk)
    <div class="row">
          @foreach($chunk as $compound)
                  <h1> compound Name :<span> {{$compound->name }}</span></h1>
                  <h2>  location : <span> {{ $compound-> location }} </span></h2>
                  <h2> img:<span> {{ $compound-> img }} </span></h2>
          @endforeach
    </div>
@endforeach--}}

<!-- SLIDER -->



<div style="background-color:purple;" class="container-fluid">
<div class="row">
<h2 style="color:#fff;" class="detail">{{$project_name }} Compounds</h2>
</div>
<div class='row'>
        <div class='col-md-12'>

                    @foreach ($compounds->chunk(3) as $key => $chunk)
          <div class="row">

    @foreach($chunk as $compound)

        <div class="col-xs-12 col-sm-4">
            <div class="card">
                <a class="img-card" href="{{ route('showcompound',array('compound_name'=> $compound->name)) }}"><img  alt="" src="{{ asset('/storage/image/'.$compound->img) }}"></a>
               
                <br />
                <div class="card-content">
                    <h4 class="card-title">
                        <a style="color:#fff;" href="#">
                        {{$compound->name }}
                        </a>
                    </h4>
                    <div style="color:#fff;" class="">
                    {{$compound->location }}
                    </div>
                </div>
                <div class="card-read-more">
                    <a class="btn btn-link btn-block" href="{{ route('showcompound',array('compound_name'=> $compound->name)) }}">
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


