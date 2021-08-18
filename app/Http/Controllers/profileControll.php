<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\User;
use App\userParmition;
use Mail;

class profileControll extends Controller
{


   
	//	UPDATE PROFILE INFO....
     
    public function update(Request $request)
    {
        
		if($request->username==session()->has('LoggetUser')){
			
			
			
			
			$user=new user;
			$user=user::where('username',session('LoggetUser'))->first();
			$user->firstName=$request->firstName;
			$user->lastName=$request->lastName;
			$user->bio=$request->bio;
			$user->address=$request->address;
			
			
			if($request->image){
				$imageName=date('d').time().date('m').'.'.$request->image->extension();
				
				$request->image->move(public_path('image/profile'),$imageName);
				
				
				$user->image=$imageName;
			}else{}
			
			$user->gender=$request->gender;
			$user->save();
			
			
			
			
			return back()->with('success','Your profile info successfully updated');
		}else{
			return back()->with('warning','Oops ! Something went wrong!');
		}
		
    }


	
	//		SEARCH PROFILE 
	
    public function search(Request $request)
    {
		$info=$request->info;
		
		
        $user=user::where('firstName', 'LIKE', '%' . $info . '%')->orWhere('lastName', 'LIKE', '%' . $info . '%')->orWhere('bio', 'LIKE', '%' . $info . '%')->get();
		
		return response()->json($user);
    }








    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*     public function update(Request $request, $id)
    {
        //
    }
 */
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
