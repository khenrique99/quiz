<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Hash;

class CustomAuthController extends Controller
{

    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function customRegistration(Request $request)
    {

        $data = $request->all();

        $insert = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'idade' => $data['idade'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect("/welcome");
    }
}