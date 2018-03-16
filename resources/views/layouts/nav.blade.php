<a class="navbar-brand" href="{{url('home')}}" style="color:#00d857; font-size:30px"><span style="font-size: 35px">3</span>Qarat</a>
<li><a href="{{url('home')}}" style="color:#f9f8eb; font-size:15px">Home</a></li>
    <li><a href="#"  style="color:#f9f8eb; font-size:15px" >Buy</a>
    
    </li>
    <li><a href="#"  style="color:#f9f8eb ; font-size:15px">Services</a></li>

    <li>
	
<li class="dropdown">
    <a style="color:white" href="#" data-toggle="dropdown" class="dropdown-toggle"> Projects <b class="caret"></b></a>
    <ul class="dropdown-menu" id="menu1">
    @foreach($projects as $project)
      <li>
        <a href="{{ route('showproject',$project->name) }}">{{$project->name}}<i class="icon-arrow-right"></i></a>
              <ul class="dropdown-menu sub-menu">
             @foreach($project->compound as $compound)
                <li><a href="{{ route('showcompound',array('compound_name'=> $compound->name)) }}">{{$compound->name}} </a></li>
                @endforeach
              </ul>
      </li>
      @endforeach
    </ul>
  </li>
 

    <li><a href="{{url('/about')}}"  style="color:#f9f8eb; font-size:15px">About Us</a></li>
    <li><a href="{{url('/contact')}}"  style="color:#f9f8eb; font-size:15px">Contact Us</a></li>


   {{--@auth
    <!--DropDown-->
    <li>
    <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">projects
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    @foreach($projects as $project)
      <li><a href="{{ route('show',$project->name) }}">{{$project->name}}
      
      </a></li>
      <!--array('project_name'=>$project->name)-->
      @endforeach
     

    </ul>
  </div>
    </li>

    @endauth--}} 



    
    <ul class="nav  navbar-right" style="padding-right:15px">
   @if (Auth::guest())

      <li><a href="{{ route('login') }}" style="color:#00d857; border:1px solid #375d6f; padding:5px 7px; margin:8px; font-size:15px">Login</a></li>
      <li><a href="{{ route('register') }}" style="color:#00d857; border:1px solid #375d6f; padding:4px 6px; margin:8px; font-size:15px">Register</a></li>
      @else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style=" font-size:20px; color:#1fbe5e">
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
    
