<?php

Route::get('/recruiters', 'abhitheawesomecoder\jobboard\controller\JoblistController@recruiters');

Route::get('/job-seekers', 'abhitheawesomecoder\jobboard\controller\JoblistController@jobseekers');


Route::group(['middleware' => 'web'], function () {

Route::get('/contact/{name}/{id}', 'abhitheawesomecoder\jobboard\controller\JobboardController@contact');	

Route::post('/contact/{name}/{id}', 'abhitheawesomecoder\jobboard\controller\JobboardController@sendmessage');	

Route::get('/edit-profile', 'abhitheawesomecoder\jobboard\controller\JobboardController@editprofile');

Route::post('/edit-profile', 'abhitheawesomecoder\jobboard\controller\JobboardController@saveeditprofile');



//Route::get('/profile-picture', 'abhitheawesomecoder\profilepic\controller\ProfilepicController@editprofilepic');

//Route::post('/profile-picture', 'abhitheawesomecoder\profilepic\controller\ProfilepicController@saveeditprofilepic');

// recruiters Job Seekers
});