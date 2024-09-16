<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users=User::with('pegawai')->get();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawais=Pegawai::all();
        return view('admin.user.create',compact('pegawais'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        extract($request->all());
        // cek email
        $cek=User::where('email',$email)->exists();
        if ($cek) {
           dd("email yg di input sudah dipakai, coba dengan email lain");
        }
        $dt=$request->only([
            'name',
            'email',
            'role',
            'pegawai_id',
        ]);
        if($request->hasFile('foto')){
            $path = $request->file('foto')->store('public/foto');
            $dt['foto'] = $path;
        }
        $dt['password']=bcrypt($password);
        $dt['is_active']='1';
        User::create($dt);
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $pegawais=Pegawai::all();
        return view('admin.user.edit',compact('pegawais','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        extract($request->all());
        $data=['name'=>$name,'pegawai_id'=>$pegawai_id,'role'=>$role];
        // return $data;
        if($request->hasFile('foto')){
            $path = $request->file('foto')->store('public/foto');
            $data['foto'] = $path;
        }
        $user->update(
            $data
            );
            return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }

    public function profile()
    {
        $profile=User::find(auth()->id());
        return view('admin.user.profile',compact('profile'));
    }
    public function profileStore(Request $request)
    {
        extract($request->all());
        $data=['password'=>bcrypt($password)];
        if($request->hasFile('foto')){
            $path = $request->file('foto')->store('public/foto');
            $data['foto'] = $path;
        }
        $user=User::find(auth()->id());
        $user->update(
            $data
            );
            return back();
    }
}
