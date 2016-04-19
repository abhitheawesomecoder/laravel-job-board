@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact {{ $name }}</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/contact').'/'.$name.'/'.$id }}">
                          {!! csrf_field() !!}

                          @if(Session::has('flash_message'))
                              <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
                          @endif
                          
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" >

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
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" >

                                  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                              
                            </div>
                           </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Phone No.</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" >

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif

                              
                            </div>
                           
                           
                        </div>


                        
                           

                         
                         <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Message</label>

                            <div class="col-md-6">
                              
                                <textarea class="form-control" name="message" value="{{ old('message') }}"></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif

                              
                            </div>
                           
                           
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                 <i class="fa fa-envelope" aria-hidden="true"></i>  Send Message
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
