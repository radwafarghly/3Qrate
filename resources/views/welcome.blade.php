
@extends('layouts.app')
@section('title')

Welcome
@endsection

<!DOCTYPE html>
<head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">


<script src="{{ asset('js/app.js') }}"></script>

<style>
    body    {
             background-image: url('http://www.icanread.asia/uploads/homepage/2013/09/22/112_o_background.jpg');             //Image Credit to www.icanread.asia
             background-repeat: no-repeat;
            }
</style>
@yield('header')

</head>




    @section('content')
    
     <!-- SEARCH -->
   
<div class="container" style="width: 33%;">
  <div class="row search"  >
        <div class="col-md-8 " >
            <input style="margin-top:4px;" type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
        </div>
        <div class="col-md-2 btn">
            <button  type="submit" class="btn btn-primary btn-sm" style=" background-color:#00d857; border: #00d857; margin-bottom:2px; padding:6px 12px; ">Search</button>
        </div>
  </div>
</div>

<!-- Slider -->
		
    <div id="first-slider" class="container-fluid" >
    <div id="carousel-example-generic" class="carousel slide carousel-fade" >
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox" style="height:500px">

        <div class="item active slide1">
                <div class="row"><div class="container">
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">Add images, or even your logo!</h3>
                        <h4 data-animation="animated bounceInUp">Easily use stunning effects</h4>             
                     </div>
                </div></div>
             </div> 

             <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown"> 50 animation options A beautiful</h3>
                        <h4 data-animation="animated bounceInUp">Create beautiful slideshows </h4>
                     </div>
                </div></div>
            </div>

            <div class="item slide3">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Simple Bootstrap Carousel</h3>
                        <h4 data-animation="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</h4>
                     </div>
                </div></div>
            </div>

            <div class="item slide4">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">We are creative</h3>
                        <h4 data-animation="animated bounceInUp">Get start your next awesome project</h4>
                     </div>
                </div></div>
            </div>

            
        </div>

        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>












                                <!--ALOT OF UNITS -->









                                <h1> Houses Under 100.000 </h1>

                                <div class="container-fluid" style="margin-top:30px">
                                <div class="row">
                                    <div class="col-md-3">
                            
                                <img src="http://hbrd.me/wp-content/uploads/2017/11/nice-house-best-25-nice-houses-ideas-on-pinterest-dream-houses-nice-big-1.jpg" alt="dsadas" />
                                <h3 style="color: #0ebb67; diplay:inline">Alex</h3>
                                <span style="display:block">Price : $100.000</span>
                            
                                <a  href="#" class="btn btn-info" >Book Now</a>
                                <a href="#" class="btn btn-info">Details</a>
                            
                            </div>
                            
                            
                            
                            </div>
                            </div>
                            





<h1> Houses Above 100.000 </h1>

<div class="container-fluid" style="margin-top:30px">
    <div class="row">
        <div class="col-md-3">

	<img src="http://hbrd.me/wp-content/uploads/2017/11/nice-house-best-25-nice-houses-ideas-on-pinterest-dream-houses-nice-big-1.jpg" alt="dsadas" />
    <h3 style="color: #0ebb67; diplay:inline">Alex</h3>
	<span style="display:block">Price : $100.000</span>

	<a  href="#" class="btn btn-info" >Book Now</a>
	<a href="#" class="btn btn-info">Details</a>

</div>



</div>
</div>







                                    <!-- OUR TEAM -->













<div style="width:100%; height:5px"></div>
 <h2>Our Team</h2>
<p style="color: #0ebb67">This Website Was Created By this Team</p>
<div class="container-fluid">

<ul class="one">
  <li class="transition">
    <div class="wrapper"> <img class="transition" src="http://images2.onionstatic.com/clickhole/2041/original/600.jpg">
          <ul class="social">
        <li style="color: black; font-size:15px; color:#33596b  ">Times New Roman but in love with Verdana Bold. <br>
          Find him on:</li>
        <li class="transition"><a href="https://www.facebook.com"><img src="http://dooreight.com/codepen/people/twitter.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/behance.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/facebook.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/skype.svg"></a></li>
      </ul>
      <p></p>
      <span class="transition">
      <h3>Radwa Ahmed<em>Full Stack Developer</em></h3>
      <img src="http://dooreight.com/codepen/people/more.svg"> </span> </div>
  </li>
  <li class="transition">
    <div class="wrapper"> <img class="transition" src="https://theblogwithonepost.files.wordpress.com/2015/07/empire-daniel-radcliffe.jpg">
      <ul class="social">
        <li>Best lorem dolor guy from Detroit. Loves Helvetica. <br>
          Find him on:</li>
        <li class="transition"><a href="https://www.facebook.com"><img src="http://dooreight.com/codepen/people/twitter.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/behance.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/facebook.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/skype.svg"></a></li>
      </ul>
      <span class="transition">
      <h3>Mohamed Salah<em>Full Stack Developer</em></h3>
      <img src="http://dooreight.com/codepen/people/more.svg"> </span> </div>
  </li>
<li class="transition">
    <div class="wrapper"> <img class="transition" src="https://theblogwithonepost.files.wordpress.com/2015/07/empire-daniel-radcliffe.jpg">
          <ul class="social">
        <li style="color: black;">Times New Roman but in love with Verdana Bold. <br>
          Find him on:</li>
        <li class="transition"><a href="https://www.facebook.com"><img src="http://dooreight.com/codepen/people/twitter.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/behance.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/facebook.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/skype.svg"></a></li>
      </ul>
      <p></p>
      <span class="transition">
      <h3>Mohamed Salah<em>Full Stack Developer</em></h3>
      <img src="http://dooreight.com/codepen/people/more.svg"> </span> </div>
  </li>
  <li class="transition">
    <div class="wrapper"> <img class="transition" src="https://i.ytimg.com/vi/2JUG-WMPfbE/maxresdefault.jpg">
      <ul class="social">
        <li>Best lorem dolor guy from Detroit. Loves Helvetica. <br>
          Find him on:</li>
        <li class="transition"><a href="https://www.facebook.com"><img src="http://dooreight.com/codepen/people/twitter.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/behance.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/facebook.svg"></a></li>
        <li class="transition"><a href="#"><img src="http://dooreight.com/codepen/people/skype.svg"></a></li>
      </ul>
      <span class="transition">
      <h3>Amr Saber<em>Full Stack Developer</em></h3>
      <img src="http://dooreight.com/codepen/people/more.svg"> </span> </div>
  </li>
  </ul>




</div>

       















                                <!--ConTact US -->





















@endsection


  <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/file1.js') }}"></script>

    </body>
</html>
