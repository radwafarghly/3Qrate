@extends('layouts.app')
@section('content')


 @if (count($testsearch) === 0)
           <p style="padding:20px; margin:70px;" class="text-center"> No Results Found</p>
@elseif (count($testsearch) >= 1)

<div style="background-color:#fff;" class="container-fluid">
<div class='row'>
        <div class='col-md-12'>

                    @foreach ($testsearch->chunk(3) as $key => $chunk)
          <div class="row">

    @foreach($chunk as $unit)

        <div class="col-xs-12 col-sm-4">
            <div class="card">
                <a class="img-card" href="{{ route('showunits',array('compound_name'=>$unit->com_name,'building_number'=> $unit->bu_num,'unit_number'=>$unit->un_num)) }}"><img  alt="" src="{{ asset('/storage/image/'.$unit->img) }}"></a>
               
                <br />
                <div class="card-content">
                    <h4 class="card-title">
                        <a>
                        {{$unit->price }}$
                        </a>
                    </h4>
                    <div class="card-title">
                    {{$unit->size }}M
                    </div>
                </div>
                <div class="card-read-more">
                    <a href="{{ route('showunits',array('compound_name'=>$unit->com_name,'building_number'=> $unit->bu_num,'unit_number'=>$unit->un_num)) }}" class="btn btn-link btn-block">
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
      
@endif
@endsection
