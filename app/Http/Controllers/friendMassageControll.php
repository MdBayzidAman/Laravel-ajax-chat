<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\massage;
use App\contact;
use App\friend;

class friendMassageControll extends Controller
{

    public function index()
    {
        //
    }
 
    public function msgSend(Request $request)
    {
		if(contact::where([['from_contact',$request->to_user],['to_contact',$request->from_user]])->orWhere([['from_contact',$request->from_user],['to_contact',$request->to_user]])->first()){
			
		}else{
			$contact=new contact;
			$contact->from_contact=$request->from_user;
			$contact->to_contact=$request->to_user;
			$contact->save();
		}
		
		
		if($request->image && $request->massage){
			
				
			$imageName=date('d').time().date('m').'.'.$request->image->extension();
			
			$request->image->move(public_path('image/user'),$imageName);
			
			
			$massage=new massage;
			$massage->from_user=$request->from_user;
			$massage->to_user=$request->to_user;
			$massage->image=$imageName;
			$massage->massage=$request->massage;
			$massage->save();
		
			return response()->json(['image'=>$imageName,'massage'=>$request->massage]);
			
		}else if($request->massage){
			
			$massage=new massage;
			$massage->from_user=$request->from_user;
			$massage->to_user=$request->to_user;
			$massage->massage=$request->massage;
			$massage->save();
			
			$this->contactUpdate($request);
			
			return response()->json(['massage'=>$request->massage]);
			
		}else if($request->image){
			
			$imageName=date('d').time().date('m').'.'.$request->image->extension();
			
			$request->image->move(public_path('image/user'),$imageName);
			
			$massage=new massage;
			$massage->from_user=$request->from_user;
			$massage->to_user=$request->to_user;
			$massage->image=$imageName;
			$massage->save();
		
			return response()->json(['image'=>$imageName]);
		}else{
			
			return response()->json('');
		};
		
		
		

    }
	//		----- 
		public function contactUpdate($request){
			$contact=new contact;
			$contact=contact::where([['from_contact',$request->to_user],['to_contact',$request->from_user]])->orWhere([['from_contact',$request->from_user],['to_contact',$request->to_user]])->first();
			$contact->last_send=time();
			$contact->save();
		}
	
	
	
	
	
	
	

    public function chatMsg(Request $request)
    {
		$chat=massage::where([['from_user',$request->to_username],['to_user',$request->username]])->orWhere([['from_user',$request->username],['to_user',$request->to_username]])->get();
		
		if(massage::where([['from_user',$request->to_username],['to_user',$request->username],['read','0']])->first()){
		
		
			$unread=massage::where([['from_user',$request->to_username],['to_user',$request->username],['read','0']])->get();
			
				
			foreach($unread as $read){
				$msg=new massage;
				$msg=massage::where([['from_user',$request->to_username],['to_user',$request->username],['read','0']])->first();
				$msg->read=1;
				$msg->save();
			}
			
		}else{}
		
        return response()->json($chat);
    }


/*     public function msg(Request $request)
    {
		$userinfo=user::all();
        return response()->json($userinfo);
    }
 */
 
    public function subUserProfile(Request $request)
    {
		$subUserinfo=user::where('username',$request->to_username)->first();
		
		if(friend::where([['from_friend',$request->username],['to_friend',$request->to_username]])->orWhere([['from_friend',$request->to_username],['to_friend',$request->username]])->first()){
			
			$contact='1';
			
		}else{
			$contact='0';
		}		
		
        return response()->json(['subUserinfo'=>$subUserinfo,'contact'=>$contact]);
    }

  
  
    public function chatPeople(Request $request)
    {
		
/* 		$data=$request;
		$from_contact=contact::where('from_contact',$request->username)
		->join('Users', function ($join){
			
			global $request;
			$join->on('contacts.to_contact','Users.username');
			
		})
		->select('Users.*','contacts.to_contact','Users.username')
		->get();	
		
		$to_contact=contact::where('to_contact',$request->username)
		->join('Users', function ($join){
			
			global $request;
			$join->on('contacts.from_contact','Users.username');
			
		})
		->select('Users.*','contacts.from_contact','Users.username')
		->get();



		*/	
		
		
		
		
		
		$peoples='';
		$data=contact::where('from_contact',$request->username)->orWhere('to_contact',$request->username)->orderBy('last_send','desc')->get();
		
		
		foreach(contact::where('from_contact',$request->username)->orWhere('to_contact',$request->username)->orderBy('last_send','desc')->get() as $msgPeople){
			
			if($msgPeople->from_contact==$request->username){
				$msgesPeople=user::where('username',$msgPeople->to_contact)->first();
			}else{
				$msgesPeople=user::where('username',$msgPeople->from_contact)->first();
			};
			
			//name bottom message info..
		if(massage::where([['from_user',$msgesPeople->username],['to_user',$request->username]])->orWhere([['from_user',$request->username],['to_user',$msgesPeople->username]])->latest()->first()->from_user == $request->username){
			
			$lastMsg='You: '.massage::where([['from_user',$msgesPeople->username],['to_user',$request->username]])->orWhere([['from_user',$request->username],['to_user',$msgesPeople->username]])->latest()->first()->massage;
			
		}else{
			$lastMsg=massage::where([['from_user',$msgesPeople->username],['to_user',$request->username]])->orWhere([['from_user',$request->username],['to_user',$msgesPeople->username]])->latest()->first()->massage;
		};
			
			
		$unread=count(massage::where([['to_user',$request->username],['from_user',$msgesPeople->username],['read','0']])->get());
			
			
			//read unread count
		if(empty($unread)){
			$countRead='';
		}elseif($unread > 0){
			$countRead='<div class="msg-count"><span>'.$unread.'</span></div>';
		}else{
			$countRead='';
		}			
		
		//profile image
		if($msgesPeople->image){
			$image='http://127.0.0.1:8000/image/profile/'.$msgesPeople->image;
		}else{
			$image='http://127.0.0.1:8000/image/self/user.jpg';
		}
			
			$peoples .= '<div class="massages-people"><div class="msg-people"><img class="user-img msg-user" src="'.$image.'" alt="" /><div class="msg-info"><input type="hidden" value="'.$msgesPeople->username.'" class="userInfo" /><span class="msg-people-name">'.$msgesPeople->firstName.' '.$msgesPeople->lastName.'</span><span class="msg-people-info">'.substr($lastMsg,0,30).'...</span></div></div>'.$countRead.'</div>';
		};
		
		
		//echo $fda;PEOPLE
		//return response()->json(['from_contact'=>$from_contact,'to_contact'=>$to_contact]);
		return response()->json($peoples);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
