@extends('layouts.app')

@section('content')
<style>
body{
    background-image:url('http://portal.aceondo.net/images/loginbackground2.jpg');
    background-size:100% 100%
}
</style>
<div class="container" style="margin:70px; 0px" >
    <div class="row justify-content-center">
          <div class= "col-md-2"></div>

        <div class="col-md-8">  
            <div class="panel" style="background-color:#f1f1f1;">
               <div class="panel-heading" style="color:#00c94a; font-size:20px; 
                background-color:#f1f1f1; border:#f1f1f1;">Reset Password
                 </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-center">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color:#1fbe5e; border:#1fbe5e">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
