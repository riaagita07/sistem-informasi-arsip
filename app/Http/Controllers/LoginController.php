<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
       
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
       $credentials['is_active']='1';
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',

        ]);
    } 
    public function home() 
    {
     // return bcrypt("admin");
     return view('login');
    }  
    public function logout(Request $request)
    {

        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        
        return redirect('/');
    }    
    public function gantipassword() 
   {
    
    return view('gantipassword');
   }  
   public function ubahpassword(Request $request,User $user) 
   {
    extract($request->all());
    $user->update(['password'=>bcrypt($gantipass)]);
    return back();
   }  
   public function lupapassword() 
   {
    return view('lupapasswordform');
   }  
   
   public function lupapasswordstore(Request $request) 
   {
    extract($request->all());
    // cek dulu, usersernamenya ada apa ga dari inputan yang dikirim
    $cek=User::where('email',$username)->exists();
    if ($cek) {
        User::where('email',$username)->update([
            'password'=>bcrypt($password),
        ]);
        return redirect('/')->with('msg','Berhasil ubah password, silakan login');
    }
    return back()->with('msg','Gagal Ubah password, mungkin anda salah input');
   }  


   public function registadmin() 
   {
    return view('registadminform');
   }  
   public function registadminStore(Request $request) 
   {
    extract($request->all());
    // cek dulu, username ada apa ga dari inputan yang dikirim
    $cek=User::where('username',$username)->exists();
    if ($cek) {
        return back()->with('msg','Username Sudah digunakan');
    }
    $cekEmail=User::where('email',$email)->exists();
    if ($cekEmail) {
        return back()->with('msg','Email Sudah digunakan');
    }
    User::create([
        'email'=>$email,
        'name'=>$name,
        'role'=>'admin',
        'is_active'=>'0',
        'password'=>bcrypt($password),
    ]);

    return redirect('/')->with('msg','Berhasil Daftar admin, hubungin admin untuk aktivasi, dan silahkan login');
   }  
}
