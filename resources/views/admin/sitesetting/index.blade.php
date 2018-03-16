@extends('admin.layouts.layout')
@section('title')

Website Settings
@endsection
@section('header')



        




@endsection


@section('content')


<div class="content-header">
        <h1>
                Website Settings
            </h1>
        <ol class="breadcrumb">
          <li><a href="{{ url('/adminpanel') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="{{ url('/adminpanel/sitesetting') }}"> Website Settings          </a></li>
        </ol>
        </div>

{{-- section table --}}
        <div class="content">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Website Settings
                            </h3>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">

                        <form action="{{ url('/adminpanel/sitesetting') }}" method="post">
                            @csrf
                        @foreach($SiteSettings as $setting)
                    
                        <div class="form-group row">
                            <div class="col-md-4">
                                {{ $setting->slug }}

                            </div>
                              
    
                                <div class="col-md-6">
                                    @if($setting->type == 0)
                                        {!! Form::text($setting->namesettings, $setting->value, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    @else
                                    
                                    {!! Form::textarea($setting->namesettings, $setting->value, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    
                                        @endif
    
                                    @if ($errors->has($setting->namesettings))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first($setting->namesettings) }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    

                        @endforeach
                        <button name="submit" type="submit" class="btn btn-app"><i class="fa fa-save"></i> Save settings</button>
                  
                        </form>

                      </div>
                    </div>
                </div>
            </div>
        </div>






 <!-- /.content -->
 @endsection

