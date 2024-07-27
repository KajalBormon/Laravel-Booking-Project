<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function saveUser(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required|confirmed'
        ]);

        $users = User::create($data);

        if($users){
            return redirect()->route('index')->with('status','Registered Successfully ');
        }


    }

    public function loginMatch(Request $request){
        $validate = $request->validate([
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validate)){
            return redirect()->route('user.dashboard');
        }

    }

    public function dashboardPage(){
        if(Gate::allows('isAdmin')){
            return redirect()->route('admin.dashboard');
        }else{
            return view('userDashboard');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');

    }

    public function showUsers(){
        $users = Department::get();
       return view('showUsers', compact('users'));
    }



}
