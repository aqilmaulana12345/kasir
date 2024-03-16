<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * menampilkan list user 
     */
    public function index(){
        
        $users =User::get();

        return[
            'data'=>$users,
        ];

    }

    /**
     * membuat list user 
     */
    
    public function create(UserCreateRequest $request){
        $validated = $request->validated();

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();

        return $user;
    }
}

