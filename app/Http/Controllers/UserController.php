<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function register(){
        return view('user.register');
    }

    public function store(Request $req){
        // dd($req->all());
       $validated=$req->validate([
            "name" => ["required", "min:4"],
            "email" => ["required", "email", Rule::unique("users", "email")],
            "password" => "required|confirmed|min:6",
       ]);

       $validated['password']=Hash::make($validated['password']);
       $user=User::create($validated);

       return redirect("/users");
    }

    public function show(){
        
        $data = DB::table("users")->get();
        return view('customer.user',['customers'=>$data]);
    }
}
