

        {{-- users --}}

        <li class="active treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Users control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="{{ url('/adminpanel/users/create')}}"><i class="fa fa-circle-o"></i> Add user</a></li>
              <li><a href="{{ url('/adminpanel/users')}}"><i class="fa fa-circle-o"></i> All users</a></li>
            </ul>
          </li>
{{--Roles--}}
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Roles control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="{{ url('/adminpanel/roles/create')}}"><i class="fa fa-circle-o"></i> Add role</a></li>
              <li><a href="{{ url('/adminpanel/roles')}}"><i class="fa fa-circle-o"></i> All roles</a></li>
            </ul>
          </li>


         
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>projects control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="{{ url('/adminpanel/projects/create')}}"><i class="fa fa-circle-o"></i> Add project</a></li>
              <li><a href="{{ url('/adminpanel/projects')}}"><i class="fa fa-circle-o"></i> All projects</a></li>
            </ul>
          </li>




        {{--Compound--}}


         
        <li class="active treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Compounds control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="{{ url('/adminpanel/compounds/create')}}"><i class="fa fa-circle-o"></i> Add compound</a></li>
              <li><a href="{{ url('/adminpanel/compounds')}}"><i class="fa fa-circle-o"></i> All compounds</a></li>
            </ul>
          </li>


          {{--building--}}



 
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Building control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="{{ url('/adminpanel/buildings/create')}}"><i class="fa fa-circle-o"></i> Add Building</a></li>
              <li><a href="{{ url('/adminpanel/buildings')}}"><i class="fa fa-circle-o"></i> All Buildings</a></li>
            </ul>
          </li>



          {{--unit--}}



 
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Unit control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="{{ url('/adminpanel/units/create')}}"><i class="fa fa-circle-o"></i> Add Unit</a></li>
              <li><a href="{{ url('/adminpanel/units')}}"><i class="fa fa-circle-o"></i> All Units</a></li>
            </ul>
          </li>


{{--book--}}
<li class="active treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>book control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/adminpanel/book')}}"><i class="fa fa-circle-o"></i> All Book</a></li>
            </ul>
          </li>



{{--contact--}}

         <li class="active treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>contact control</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url('/adminpanel/contact')}}"><i class="fa fa-circle-o"></i> All Messages</a></li>
            </ul>
          </li>