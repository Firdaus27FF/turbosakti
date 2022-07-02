<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = auth()->user();
        if($auth->hasRole('admin'))
        {
            $user = User::count();
            return view('admin.dashboard.dashboard', compact('user'));
        }else{
            return view('users.index');
        }
    }

    public function logout(Request $request)
    { 
        return redirect('auth.password.login');
    }
}
