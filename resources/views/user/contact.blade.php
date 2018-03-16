

 <!-- Contact -->
 <section style="background-image:url( {{ asset('img/map-image.png')}})" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted" style="font-size:30px; color:white">Get in<span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s" style="    font-family: 'Oleo Script', cursive; color: #fcc500;font-size: 45px;"> Touch with us</span> </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
              		@if(Session::has('success'))
	    <div class="alert alert-success">
	      {{ Session::get('success') }}
	    </div>
	@endif
    {!! Form::open(array('route' => 'contact.store','method'=>'POST'))!!}
    <div class="row">
                <div class="col-md-6">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
				<span class="text-danger">{{ $errors->first('name') }}</span>
                  </div>
                  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                  {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  </div>
                  
                </div>
                <div class="col-md-6">
                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
				<span class="text-danger">{{ $errors->first('message') }}</span>
                  </div>
                </div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
              {!! Form::close() !!}
           </div>
        </div>
      </div>
    </section>