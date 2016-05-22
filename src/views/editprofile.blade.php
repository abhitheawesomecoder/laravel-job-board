@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/edit-profile') }}">
                          {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ $errors->has('name') ? '' : $user->name }}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                              
                            </div>
                           
                           
                        </div>

                           <div class="form-group">
                            <label class="col-md-4 control-label">Email</label>

                             <div class="col-md-6">
                                <input type="email" disabled class="form-control" name="email" value="{{ $user->email }}" >

                              
                            </div>
                           </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>
                             <div class="col-md-6">
                                <input type="password" class="form-control" name="password">


                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>
                             <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                        </div>
                           

                         <div class="form-group{{ $errors->has('user_type') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Recruiter/ Job-Seeker</label>

                            <div class="col-md-6">
                                
                                 <select class="form-control" name="user_type">
                                    <option value="">Select</option>
                                    <option @if($profile->user_type == 'Job-Seeker') selected @endif value="Job-Seeker" >Job-Seeker</option>
                                    <option @if($profile->user_type == 'Recruiter') selected @endif value="Recruiter" >Recruiter</option>
                                  
                                 </select>

                                @if ($errors->has('user_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_type') }}</strong>
                                    </span>
                                @endif

                              
                            </div>
                           
                           
                        </div>
                         <div class="form-group{{ $errors->has('website_url') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Website Url</label>

                            <div class="col-md-6">
                              <div class="input-group">
                                <div class="input-group-addon">http://</div>
                                <input type="text" class="form-control" name="website_url" placeholder="mywebsite.com" value="{{ $profile->website_url }}">
                              </div>
                                @if ($errors->has('website_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website_url') }}</strong>
                                    </span>
                                @endif

                              
                            </div>
                           
                           
                        </div>
                         <div class="form-group{{ $errors->has('profile_description') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Profile Description</label>

                            <div class="col-md-6">
                              
                                <textarea class="form-control" name="profile_description">{{ $profile->profile_description }}</textarea>

                                @if ($errors->has('profile_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_description') }}</strong>
                                    </span>
                                @endif

                              
                            </div>
                           
                           
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Update
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
