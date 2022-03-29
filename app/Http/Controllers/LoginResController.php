<?php

namespace App\Http\Controllers;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LoginResController extends Controller
{   
    public function login()
    {
        return view('html.LoginRes.login');
    }
    

    public function addlogin(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required|max:32',
            'password'=> 'required|max:32',
          ]);
    

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if (Auth::user()->status==1 ) {
                //return view('html.admin.home');
                return redirect()->route('admin.home');
               
            }else{
                return redirect()->route('home');
            }
            
          
        }
         else
        {
            return redirect()->route('login')->with('fail', 'Tài khoản hoặc mật khẩu không đúng!');
        }
      

    }

    public function register()
    {
        return view('html.LoginRes.register');
    } 
       
     public function addregister(Request $request)
     {
        $add=DB::table('users');
        $add->insert([
          'name'=>$request->name,
          'SDT'=> $request->SDT,
          'email'=> $request->email,
          'dia_chi' =>$request->diachi,
          'password'=> bcrypt($request->password),
          'status' => 0,
        ]);
        return redirect()->route('login')->with('fail','Dữ liệu được thêm thành công');
     }

     public function logout()
     {
        Auth::logout();
        return redirect('/');
     }
}