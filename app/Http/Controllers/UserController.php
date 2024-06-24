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

    public function dashboard(){
        return view('dashboard');
    }
    public function edit()
    {
        return view('user.edit');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nick' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6'
        ]);

        $data = $request->all();

        $check = User::create($data);
        if ($check) {
            return response()->json(['intended' => route('login')], 200);
        } else {
            return response()->withError('Something goes wrong!');
        }
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
