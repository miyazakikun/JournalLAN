<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Alert;

use Toastr;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard');
    }
    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('auth.profile', compact('user'));
    }
    public function updateprofile(Request $request,$id)
    {
        $data = User::findOrFail($id);
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$data->id,
            'username' => 'required|string|max:30|unique:users,username,'.$data->id,
            'password' => 'required|string|min:6',
        ]);
        $data = $data->update([
                        'name' => $request->name,
                        'username' => $request->username,
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                    ]);
        Toastr::success('Aksi Berhasil', 'Ubah Profile Berhasil');
        return redirect()->back();
    }
}
