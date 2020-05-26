<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Auth;

class UserController extends Controller
{
    public function index()
    {

        return User::all();
        

    }
   
    public function low(User $user)
    {
        
        return view('low');
    }

    public function medium(User $user)
    {
        if(Gate::allows('medium-Users') || Gate::allows('high-Users') ){
            return view('medium');
        }
        return redirect('home');

    }

    public function high(User $user)
    {
        if(Gate::allows('high-Users')){
            return view('high');
        }
        return redirect('home');
        
    }
}
