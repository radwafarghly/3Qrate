<div class="container-fluid" style=" margin-top:25px; text-align:center; background-color: purple;">
  <h2 style="color:#fff;">Unit Details</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
    @foreach($images as $key => $image)
      <li data-target="#myCarousel" data-slide-to="{{$key}}" class="active"></li>
      @endforeach
    </ol>

    <div style="height:500px;" class="carousel-inner">
    @foreach($images as $image)
@if ($loop->first)
     <div class="item image active">
     @else
     <div class="item image">
@endif
      <div class="row"  >
        <div class="col-md-12" >
           <img   src="{{asset('image/'.$image->img_name) }}" alt="Los Angeles" >
        </div>
      </div>
      </div>
      @endforeach 


      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="fa fa-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="fa fa-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

      </div>
</div>
