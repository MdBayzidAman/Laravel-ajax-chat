<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\userParmition;
use Mail;
use Hash;
use Crypt;

class forgetControll extends Controller
{
 
 
 //		VIEW FORGET PAGE 
    public function index()
    {
        return view('register.forget.forgetEmail');
    }

 //		VIEW VERIFY PAGE
    public function verifyPage()
    {
        return view('register.forget.forgetVerify');
    }


	
	//		CHOESE EMAIL FOR FORGET PASSWORD
    public function forget(Request $request)
    {
		
		$validate=$request;
        $validate->validate([
		'email' => 'required',
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
 
		$email=user::where('email',$request->email)->get();
		$countEmail=count($email);
		
		if($countEmail==1){
			
			$user=new user;
			$user=user::where('email',$request->email)->first();
			$user->verify=$code;
			$user->save();
			
			
			return redirect('/forget-verify?username='.$user->username)->with('success','Please check your email inbox !. We send a verify code to your email.');
			
		}elseif($countEmail>1){
			
			
			return view('register.forget.forgetDubbleEmail',compact('email'));
		}
		
		
    }


	
	
	//	WHENE SELECT EMAIL FROM DUBBLE USER EMAIL
    public function selectEmail(Request $request)
    {
		
		$validate=$request;
        $validate->validate([
		'username' => 'required',
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
		$user=new user;
		$user=user::where('username',$request->username)->first();
		$user->verify=$code;
		$user->save();
		
        return redirect('/forget-verify?username='.$request->username)->with('success','Please check your email inbox !. We send a verify code to your email.');
    }


	
	
//		VERIFY EMAIL
    public function verify(Request $request)
    {
		$username=$request->username;
		
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

		
		return view('register.forget.forgetPassword',compact('username'));

	 }else{		 
		 
		return redirect()->back()->with('warning','Oops ! your verify code is wrong. Please try again.');
		 
	 };
        
    }





    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
