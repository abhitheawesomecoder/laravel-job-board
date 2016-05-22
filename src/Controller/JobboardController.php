<?php
namespace Abhitheawesomecoder\Jobboard\Controller;

use Abhitheawesomecoder\Profilepic\Model\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class JobboardController extends Controller
{
	
	public function __construct(){

       $this->middleware('auth');

    } 

    public function contact($name,$id){

        $fullname = str_replace('-', ' ', $name);

        return view('jobboard::contact',["name" => $fullname, "id" => $id]);
    }
    
    public function sendmessage($name,$id,Request $input){

        $user = User::find($id);

        $toName = $user->name;

        $toEmail = $user->email;

        $fromEmail = $input["email"];

        $fromName = $input["name"];
      
          $this->validate($input, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|max:255',
        'message' => 'required|max:255'   
            ]);

        $data = array('messagetxt' => $input["message"],'fromName' => $fromName ,'fromEmail' => $fromEmail);

        \Mail::send('jobboard::message', $data , function ($message) use ($fromEmail, $fromName, $toEmail, $toName) {
            $message->from($fromEmail, $fromName);

            $message->to($toEmail, $toName)->subject('Contact message for job');
        });


    \Session::flash('flash_message','Message Sent Successfully.');

   // return redirect()->route("photo.index");
     return redirect('contact/'.$name.'/'.$id);

    }
    public function editprofile(){

      $user = User::find(Auth::user()->id);   

      $profile = Profile::where("user_id",$user->id)->first(); 

      if($profile){

        }else{

            $profile = new Profile;
        }  

        $profile->user_id = $user->id; 
        $profile->save();

      return view('jobboard::editprofile',["user" => $user,"profile" => $profile]);
    }

    public function saveeditprofile(Request $input){

        $this->validate($input, [
        'name' => 'required|max:255',
        'password' => 'min:6|confirmed',
        'user_type' => 'required',
        'website_url' => 'required',
        'profile_description' => 'required'     
            ]);

        $user = User::find(Auth::user()->id);
        $user->name = $input["name"];
        if ($input->has('password')) 
        $user->password = bcrypt($input['password']);        
        $user->save();  


        $profile = Profile::where("user_id",$user->id)->first();

        if($profile){

        }else{

            $profile = new Profile;
        }  

        $profile->user_id = $user->id;        

        $profile->user_type = $input["user_type"];
        $profile->website_url = $input["website_url"];
        $profile->profile_description = $input["profile_description"];        

        $profile->save();    

        return redirect('edit-profile');

    }

   

}