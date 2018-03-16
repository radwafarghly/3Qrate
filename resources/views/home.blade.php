
@extends('layouts.app')
@section('title')

Welcome
@endsection
  



    @section('content')
    
     <!-- SEARCH -->
   


    <!-- Header -->
    <header class="masthead" style="background-image:url({{asset('images/hands-joined-by-the-team_1150-100.jpg')}});">
      <div class="container">
        <div class="intro-text">
          <div style="color:#09c;" class="intro-lead-in">Welcome To Our Site!</div>
          <div style="color:#09c;" class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">Tell Me More</a>
        </div>
      </div>
    </header>
    @include('user.about')



@include('layouts.product')


{{--@include('layouts.slider')--}}



@include('layouts.ourteam')

</br> 
 

<!-- OUR TEAM -->

@include('user.contact')

@endsection


  <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
