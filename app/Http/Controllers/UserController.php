<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
   public function index()
   {
   	
   	return view('index');
   }

   public function userlist(){
      $userInfo=User::all();
      return view('user_list')->with('userinfo',$userInfo);
   }
   public function store(Request $request)
   {

      $request->validate([
       'email' => 'required|unique:users',
    
        ]);
   	$user=new User;
   	$user->name=$request->name;
   	$user->email=$request->email;
   	$user->password=$request->password;
   	$user->birthday=$request->day."-".$request->month."-".$request->year;
      $user->terms=$request->terms;
   	$user->city=$request->city;
   	$user->country=$request->country;
   	$user->save();
   	return redirect()->route('userlist');
   }
   public function edit($id)
   {
      $user=new User;
   	$userinfo=$user->find($id);
      return view('edit')->with('userinfo',$userinfo);
   }

   public function update(Request $request)
   {
      $user=new User;
      $id=$request->id;
      $user=$user->find($id);
      $user->name=$request->name;
      $user->email=$request->email;
      $user->password=$request->password;
      $user->birthday=$request->day."-".$request->month."-".$request->year;
      $user->city=$request->city;
      $user->country=$request->country;

      $user->save();
      return redirect()->route('userlist');
   }
   public function view($id)
   {
      $user=new User;
      $userinfo=$user->find($id);
      return view('view')->with('userinfo',$userinfo);
   }
    public function delete(Request $request,$id)
   {
      $user=new User;
      $user=$user->find($id);
      $user->delete();
      return redirect()->route('userlist');
   }
}
