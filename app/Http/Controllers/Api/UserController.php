<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        return $request->user();        
    }

    public function logout(Request $request)
    {
        if ($request->user()) { 
            $request->user()->tokens()->delete();

            return response()->json([
                'message' => 'Successfully logged out',
            ]);
        }
       
    }

   

}
