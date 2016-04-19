# laravel-job-board
Package to create job board quickly using laravel 5.2

## Installation

Step 1 : Laravel 5.2 Auth Scafold

    php artisan make:auth
    

Step 2 : Install Composer dependency

    composer require abhitheawesomecoder/laravel-job-board

Step 3 : Register the Service Provider

  Abhitheawesomecoder\Laraveleditprofile\EditprofileServiceProvider::class,
  Abhitheawesomecoder\Profilepic\ProfilepicServiceProvider::class,
  Abhitheawesomecoder\Jobboard\JobboardServiceProvider::class

to providers array in *config/app.php*

run the following command: 'php artisan vendor:publish' you can override the views under the folder: 'views/vendor/abhitheawesomecoder/jobboard' 

Step 4 : Run Migration

php artisan migrate

## Usage

Go to link http://localhost/laravel/public/edit-profile

Go to link http://localhost/laravel/public/recruiters

Go to link http://localhost/laravel/public/job-seekers

where http://localhost/laravel/public/ is path to your laravel website

