@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($users as $user)
    <div class="row">
          <div class="col-md-2">
            <img style="width: 130px;border-radius: 50%;" src="{{ $user->profilepic }}">
          </div>
          <div class="col-md-10">
              <div class="row">
                 <div class="col-md-12">
                    <h3>{{ $user->name }}</h3>               
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-12">
                 <a href="{{ $user->website_url }}">http://{{ $user->website_url }}</a>            
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-12">
                 <p>{{  $user->profile_description }}</p>                  
                 </div>
              </div>
                <div class="row">
                 <div class="col-md-12">
                    <a href="{{ url('contact').'/'.str_replace(' ', '-', $user->name).'/'.$user->id }}" class="btn btn-primary" >Contact</a>
                 </div>
             </div>

          </div>

    </div>
  @endforeach

</div>
@endsection