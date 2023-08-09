<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{


    public function register(Request $request)
    {
        if ($request->user()) { 
          

            return response()->json([
                'message' => 'Successfully register',
            ]);
        }
       
    }

   

}
