<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;


class indexController extends Controller
{

    public function userData(Request $request)
    {
		//$username=$request->input('username');
        $userinfo=user::where('username',session('LoggetUser'))->first();
		
		return response()->json($userinfo);
    }

	
	
    public function index()
    {
		if(session()->has('LoggetUser')){
			$user=user::where('username',session('LoggetUser'))->first();
			return view('index.home',compact('user'));
		}else{
			return view('register.register');
		}
    }


    public function profile($name)
    {
		if(session()->has('LoggetUser')){
			
			$user=user::where('username',session('LoggetUser'))->first();
			$profile=user::where('username',$name)->first();
			
			return view('index.home',compact('user','profile'));
		}else{
			return view('register.register');
		}
    }

    public function friend()
    {
		if(session()->has('LoggetUser')){
			$user=user::where('username',session('LoggetUser'))->first();
			return view('index.home',compact('user'));
		}else{
			return view('register.register');
		}
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
