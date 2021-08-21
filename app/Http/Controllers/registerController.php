<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\userParmition;
use Mail;
use Hash;
use Crypt;

class registerController extends Controller
{


    public function index()
    {
        return view('register.register');
    }
	
	

	
//-------------------- signUp User -------------------//
	
	
    public function signUp(Request $request)
    {
		
		
		$validate=$request;
		
        $validate->validate([
		'firstName' => 'required|max:70',
		'lastName' => 'required|max:70',
		'password' => 'required|max:70',
		
		]);	

			
		$code=rand(111111,999999);
		
/* 		Mail::send('register.mail',[
		
			'name' => $request->name,
			'code' => $code,
		
		],function($mail) use($request){
			
			$mail->from(env('MAIL_FROM_ADDRESS',$request->email));
			$mail->to("$request->email")->subject('ChatApp');
		
		});
		
 */
 		 $username_replace=str_replace(' ', '', $request->firstName.'-'.$request->lastName);
		 
		 $count_username=count(user::where('username_short',$username_replace)->get());
		 		 
		 if($count_username==0){
			 $username=$username_replace;
			 
		 }elseif($count_username>0){
			 
			 $username=$username_replace.$count_username;
		 }
		 
		 
		 $user=new user;
		 $user->firstName=$request->firstName;
		 $user->lastName=$request->lastName;
		 $user->username_short=$username_replace;
		 $user->username=$username;
		 $user->verify=$code;
		 $user->email=$request->email;
		 $user->password=$request->password;
		 //$user->password=Hash::make($request->password);
		 $user->gender=$request->gender;
		 $user->save();
		 
		 $userParmition=new userParmition;
		 $userParmition->user_id=$username;
		 $userParmition->parmition=2;
		 $userParmition->verifyed=0;
		 $userParmition->save();
		 
		 
	 
	  return view('register.verify',compact('username'))->with('success','Please check your email inbox !. We send a verify code to your email.');
	  	  
    }
	
	
	

//-------------------- verify mail-------------------//
	
//		VERIFY EMAIL
    public function verify(Request $request)
    {
		
	if(user::where([['username',$request->username],['verify',$request->verify]])->first()){
		 
		 $userParmition=new userParmition;
		 $userParmition=userParmition::where('user_id',$request->username)->first();
		 $userParmition->verifyed=1;
		 $userParmition->save();
		 
		 $user=new user;
		 $user=user::where('username',$request->username)->first();
		 $user->verify=0;
		 $user->save();

		 
		 $request->session()->put('LoggetUser',$user->username);

		$firstName=user::where('username',$request->username)->first()->firstName;
		
		

			return redirect('/')->with('success','Hi '.$firstName.' !  You are successfully created your account.');
		

	 }else{		 
		 $username=$request->username;
		 
		return redirect()->back()->with('warning','Oops ! your verify code is wrong. Please try again.');
		 
	 };
			  
    }


	//----------resend code -------------//
    public function resend(Request $request)
    {	
	
		$code=rand(111111,999999);
		
		$user_mail=user::where('username',$request->username)->first()->email;
		
/* 		Mail::send('register.mail',[
		
			'name' => user::where('username',$request->username)->first()->firstName,
			'code' => $code,
		
		],function($mail) use($request){
			
			$mail->from(env('MAIL_FROM_ADDRESS',$request->email));
			$mail->to("$user_mail")->subject('ChatApp');
		
		});
		
 */
		 $user=new user;
		 $user=user::where('username',$request->username)->first();
		 $user->verify=$code;
		 $user->save();
		 
		return redirect()->back()->with('success','We resend a verify code to your email. Please check your email !');
    }


    public function login(Request $request)
    {
        $request->validate([
			'email'=>'required|email',
			'password'=>'required'
		]);
		
		$user=user::where('email',$request->email)->first();
	
		if($user){
			//Hash::check($request->password,$user->password)
			if(user::where([['email',$request->email],['password',$request->password]])->first() && userParmition::where([['user_id',$user->username],['verifyed','1']])->first()){
				
				$userInfo=user::where([['email',$request->email],['password',$request->password]])->first();
				
				$request->session()->put('LoggetUser',$userInfo->username);
				
				return redirect('/');

			}else if(userParmition::where([['user_id',$user->username],['verifyed','0']])->first()){
				
				return redirect()->back()->with('warning','Oops !  your account is not verifyed. Please verify your account or create new account.');
			}else{
				return redirect()->back()->with('warning','Oops !  your passwor	is wrong. Please try again.');

			}
			
		}else{
			return redirect()->back()->with('warning','Oops ! Account not found.');

		};
		
    }


	
	
	//-------- logout  --------//

    public function logout()
    {
        session()->forget('LoggetUser');
		
		//return view('register.register');
		return redirect('/');
    }



	
    public function destroy($id)
    {
        //
    }
}
