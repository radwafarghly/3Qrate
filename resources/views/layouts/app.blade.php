<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Units Website @yield('title')</title>


  
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/team.css') }}" rel="stylesheet">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    <link href="{{ asset('css/agency.min.css') }}" rel="stylesheet">



 


    
@yield('header');
   
</head>
<body style="background-color:#eee;" id="app-layout">
<nav style=" font-size:18px;about margin-bottom:0px; position:fixed; width:100%; top:0px; background-color:#09c; z-index:10;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	      <li class="active"><a style="padding-right: 40px; background-color:#09c;" href="{{url('home')}}"><b>3Qarat</b></a></li>

          <li class="active"><a style="padding-right: 40px; background-color:#09c;" href="{{url('home')}}">Home</a></li>
            

          <li class="dropdown">
    <a style="padding-right: 40px; color:#fff;" href="#" data-toggle="dropdown" class="dropdown-toggle"> Projects <b class="caret"></b></a>
    <ul class="dropdown-menu" id="menu1">
    @foreach($projects as $project)
      <li>
        <a href="{{ route('showproject',$project->name) }}">{{$project->name}}<i class="icon-arrow-right"></i></a>
              <ul class="dropdown-menu sub-menu">
             @foreach($project->compound as $compound)
                <li><a href="{{ route('showcompound',array('compound_name'=> $compound->name)) }}">{{$compound->name}} <span>Compound</span> </a></li>
                @endforeach
              </ul>
      </li>
      @endforeach
      </ul>
  </li>
  <li><a style="padding-right: 40px; color: #fff; " href="{{url('/home')}}#about">About Us</a></li>
  <li><a style="padding-right: 40px; color: #fff;" href="{{url('home')}}#contact">Contact Us</a> </li>
@auth
  @if(\Auth::user()->admin == 1)
    <li><a style="padding-right: 40px; color: #fff;" href="{{url('/adminpanel')}}">adminPanel</a> </li>
    @else 
    <li><a style="padding-right: 40px; color: #fff;" href="#"></a> </li>
  @endif
  @endauth



      </ul>
{!! Form::open(array('route' => 'queries.index' ,'method'=>'GET','class'=>'form navbar-form navbar-left searchform')) !!}
    {!! Form::text('search', null, array('required','class'=>'form-control','placeholder'=>'Search with City')) !!}
     {!! Form::submit('Submit',array('class'=>'btn btn-default')) !!}
 {!! Form::close() !!}
      <ul class="nav navbar-nav navbar-right">

      @if (Auth::guest())

<li><a href="{{ route('login') }}" style="color:#fff;  padding:5px 7px; margin:8px; font-size:15px">Login</a></li>
<li><a href="{{ route('register') }}" style="color:#fff; padding:4px 6px; margin:8px; font-size:15px">Register</a></li>
@else
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style=" font-size:20px; color:#fff">
      {{ Auth::user()->name }} <span class="caret"></span>
  </a>

  <ul class="dropdown-menu">

    <li>
      <a href="{{ route('profile')}}" >
         Profile
      </a>
    </li>
    <li>
      <a href="{{ route('logout')}}" 
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      Logout

      </a>

      <form id="logout-form" action="{{ route('logout')}}" method="Post" style="display: none;">


      {{ csrf_field()}}
        

      </form>
      

    </li>
   
    



     </ul>
     
    </li>
  @endguest

       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>






 







  






<div id="app">


                      
        @yield('content')
 
        <div class="footer-section">
    <div class="footer1">
	<div class="container">
		    <div class="col-md-4 footer-one">
		      <div class="foot-logo">
		          <img class="logo" src="{{ asset('images/logo.png') }}" style="width: 100%" >
		      </div> 
		       
		       <p> Thank you for visiting our site <br>
		       We Wish you can find convenient Unit For you
                </p>
            <div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	        </div>
		    </div>
		    <div class="col-md-2 footer-two" style="margin: 10px 120px  0px 30px">
		       <h5>Quick Links</h5>
		          <ul>
              <li><a href="{{url('/home')}}">Home Page</a> </li>

                    <li><a href="{{url('/home')}}#about"> About Us</a> </li>
                
                    <li><a href="{{url('/home')}}#contact"> Contact Us</a> </li>
                  </ul>
                  
		    </div>
		   
		    <div class="col-md-4 footer-four">
		         <img src="http://iacademy.mikado-themes.com/wp-content/uploads/2017/05/footer-img-1.png" style="margin-top:20px">  
                  
		    </div>
		    
		
		
		
		
		
		<div class="clearfix"></div>
	</div>
</div>

</div>
<div class="footer-bottom">
        <div class="container">
					<div class="row">
						<div class="col-sm-6 ">
							<div class="copyright-text text-center">
								<p>CopyRight © 2017 Digital All Rights Reserved</p>
							</div>
						</div> <!-- End Col -->
								
													
					</div>
				</div>
    </div> 
    


      <script src="{{ asset('js/app.js') }}"></script>
    <script>


$(function() {
  /**
  * NAME: Bootstrap 3 Multi-Level by Johne
  * This script will active Triple level multi drop-down menus in Bootstrap 3.*
  */
  $('li.dropdown-submenu').on('click', function(event) {
      event.stopPropagation(); 
      if ($(this).hasClass('open')){
          $(this).removeClass('open');
      }else{
          $('li.dropdown-submenu').removeClass('open');
          $(this).addClass('open');
     }
  });
});







</script>


    <!-- Scripts -->
</body>
</html>
