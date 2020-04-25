<?php

namespace App\Http\Controllers;

use App\Hint;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function homeMain(){
        $hint = Hint::all();
        return view('mainIndex.index', compact('hint'));
    }


    public function index()
    {
        if ($this->userCan('view-page-admin')){
            return redirect()->route('admin.page');
        }
        return redirect()->route('user.page');
    }

    public function showPageGuest()
    {
        if (!$this->userCan('view-page-guest')) {
            abort(403,__('vao lam gi'));
        }
        return view("user.index");
    }

    public function showPageAdmin()
    {
        $user = User::all();
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        return view("admin.index",compact("user"));
    }
    public function loginDetail($id){
        $user = User::findOrFail($id);
        return view('layouts.home', compact('user'));
    }
    public function detailProfile(){
        if ($this->userCan('view-page-admin')){
            return redirect()->route('admin.page');
        }
        return redirect()->route('user.page');
    }
}
