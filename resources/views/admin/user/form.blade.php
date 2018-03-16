      
          @csrf
                  <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                               

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="admin" class="col-md-4 col-form-label text-md-right">User type</label>
    
                                <div class="col-md-6">
                                        {!! Form::select('admin', array('0' => 'member' , '1' => 'admin'), array('placeholder' => 'User type','class' => 'form-control')) !!}
                                   
    
                                    @if ($errors->has('admin'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('admin') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                    <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                   
                  @if(!isset($user))
                    <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                    <input name="password" type="password" class="form-control" value="" id="password"/>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                

                    <div class="form-group row">
                        
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                    <input name="confirm-password" type="password" class="form-control" value="" id="password_confirmation"/>
                            </div>
                        </div>
                       


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Roles</label>

                            <div class="col-md-6">
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                               

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif  



                        <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                    
                          
       