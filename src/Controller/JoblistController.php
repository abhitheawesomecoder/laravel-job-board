<?php
namespace Abhitheawesomecoder\Jobboard\Controller;

use Abhitheawesomecoder\Profilepic\Model\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class JoblistController extends Controller{

	public function recruiters(){ 

    $users = \DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->where("user_type","Recruiter")
            ->get();     

       return view('jobboard::profilelist',["users" => $users]);
    }

    public function jobseekers(){ 
        
        $users = \DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            ->where("user_type","Job-Seeker")
            ->get();        

       return view('jobboard::profilelist',["users" => $users]);
    }

   

}