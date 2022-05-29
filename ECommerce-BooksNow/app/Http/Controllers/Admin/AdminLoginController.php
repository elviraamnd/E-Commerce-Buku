<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;


class AdminLoginController extends Controller
{
    public function redirectLogin(){
        return redirect()->route('admin.login');
    }

    public function check(Request $request){
        $check = $request->validate([
            'username' => 'required|email',
            'password' => 'required',
        ]);
        if($check){
            $credentials = $request->only('username', 'password');
            if(Auth::guard('admin')->attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->route('admin.home');
            }else{
                toast('Incorrect Credentials','error');
                return redirect()->route('admin.login');
            }
        }
    }

    public function logout(Request $request){
        // dd($request);
        Auth::guard('admin')->logout();
       // $request->session()->invalidate();

       // $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function index() {
        
        return view('admin.auth.register');
    }

    public function store(Request $request) {

        $check = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|email|unique:admins',
            'password' => 'required|min:5|max:255',
        ]);

        $data= array(
            'name'=> $request->name,
            'username'=> $request->username, 
            'password'=> Hash::make($request->password),
            
        );
        
        Admin::create($data);
        return redirect('/superadmin')
        ->with('success','Registration has been successful');
        
    }

    
}
