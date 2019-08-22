<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function index(){
        $list= User::all();
        return view('Admin.module.user.list',compact('list'));
    }
    public function create(Request $request){
       $user=new User();
       $user->name= $request->formData[0]['value'];
       $user->address= $request->formData[1]['value'];
       $user->phone= $request->formData[2]['value'];
       $user->email= $request->formData[3]['value'];
       $user->password= Hash::make($request->formData[4]['value']);
       $user->role= $request->formData[5]['value'];
       $user->save();
       return json_encode($user);
    }
    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
        return response()->json(['success'=>'Delete successful'],200);
    }
    public function getForm()
    {
        return view('Admin.layouts.login');
    }
    public function loginAdmin(Request $request)
    {
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect()->route('dashboard');
        }
        else
        {
            return redirect()->back()->with('error','Tài khoản hoặc mật khẩu bị sai ');
        }

    }
    public function logoutAdmin(){
        Auth::logout();
        return redirect()->route('getFormAdmin');
    }
}
