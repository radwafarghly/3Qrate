@extends('admin.layouts.layout')
@section('title')

Main 

@endsection



@section('content')
<section class="content">
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$book}}</h3>

                <p>Number of Books</p>
            </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="{{ url('/adminpanel/book')}}" class="small-box-footer">Books Details<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{$user}}</h3>

                <p>Number of Users</p>
            </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="{{ url('/adminpanel/users')}}" class="small-box-footer">Users Details<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3>{{$unit}}</h3>

                <p>Number of Units</p>
            </div>
        <div class="icon">
            <i class="ion ion-home"></i>
        </div>
        <a href="{{ url('/adminpanel/units')}}" class="small-box-footer">Units Details<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    
  </div>
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{$project}}</h3>

                <p>Number of Project</p>
            </div>
        <div class="icon">
            <i class="fa fa-briefcase"></i>
        </div>
        <a href="{{ url('/adminpanel/projects')}}" class="small-box-footer">Projects Details<i class="fa fa-arrow-circle-right"></i></a>
        </div>
    
  </div>
  </div>
  <div class="row">
   <div class="col-lg-3 col-xs-6">
   <div class="small-box bg-gray">
            <div class="inner">
                <h3>{{$building}}</h3>

                <p>Number of Building</p>
            </div>
        <div class="icon">
            <i class="fa fa-building"></i>
        </div>
        <a href="{{ url('/adminpanel/buildings')}}" class="small-box-footer">Buildings Details<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      
   </div>
   <div class="col-lg-3 col-xs-6">
   <div class="small-box bg-red">
            <div class="inner">
                <h3>{{$compound}}</h3>

                <p>Number of Compounds</p>
            </div>
        <div class="icon">
            <i class="fa fa-institution	"></i>
        </div>
        <a href="{{ url('/adminpanel/compounds')}}" class="small-box-footer">Compounds Details<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      
   </div>
   <div class="col-lg-3 col-xs-6">
   <div class="small-box bg-orange">
            <div class="inner">
                <h3>{{$contact}}</h3>

                <p>Number of Contacts</p>
            </div>
        <div class="icon">
            <i class="fa fa-envelope"></i>
        </div>
        <a href="{{ url('/adminpanel/contact')}}" class="small-box-footer">Contacts Details<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      
   </div>
   </div>
</section>


@endsection
