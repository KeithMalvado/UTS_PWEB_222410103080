<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    // public function processLogin(Request $request)
    // {
    //     $username = $request->input('username');
    //     return redirect()->route('dashboard', ['username' => $username]);
    // }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        $request->session()->put('username', $username); 
        return redirect()->route('dashboard');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    // public function profile(Request $request)
    // {
    //     $username = $request->query('username', 'Tidak diketahui');
    //     return view('profil', compact('username'));
    // }
    
    public function profile(Request $request)
    {
        $username = $request->session()->get('username', 'Tidak diketahui');
        return view('profil', compact('username'));
    }

    

    public function pengelolaan()
    {
        $dataKaryawan = ['Fauzi', 'Ipan', 'Keith Malvado'];
        return view('pengelolaan', compact('dataKaryawan'));
    }
}
