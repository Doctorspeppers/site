<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function edit()
    {
        return view('user.edit');
    }

    public function store(StoreUserRequest $request){

        return ;
    }

    public function delete()
    {
        $user = Auth::user();
        $user->delete();
        return redirect("login")->withSuccess('You have signed-in');
    }
}
