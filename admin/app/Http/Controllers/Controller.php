<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request){
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            // $success['token'] = $user->createToken('appToken')->accessToken;
           //After successfull authentication, notice how I return json parameters
            return response()->json([
              'success' => true,
            //   'token' => $success,
              'user' => $user
          ]);
        } else {
       //if authentication is unsuccessfull, notice how I return json parameters
          return response()->json([
            'success' => false,
            'message' => 'Invalid Email or Password',
        ], 401);
        }
    }
}
