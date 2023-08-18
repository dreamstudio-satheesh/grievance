<?php

namespace App\Http\Controllers\Api;

use App\Models\Complaint;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\BaseController as BaseController;

class ComplaintController extends BaseController
{

    function track(Request $request)
    {
        if ($request->user()) { 
        $complaints = Complaint::where('user_id', $request->user()->id)->get();
        return response()->json($complaints);
        }  
    }
    public function register(Request $request)
    {
        if ($request->user()) { 

            $validator = Validator::make($request->all(), [ 
                'username' => 'required|string|max:255',
                'mobile' => 'required|string|max:11',
                'email' => 'required|email',
                'doorno' => 'required|string',
                'panchayat_id' => 'nullable|integer',
                'ward_id' => 'nullable|integer',
                'street_id' => 'nullable|integer',
                'division_id' => 'nullable|integer',
                'dstreet_id' => 'nullable|integer',
                'subject' => 'required|string|max:255',
                'priority' => 'required|string',
                'description' => 'required|string',
                'status' => 'required|string|in:new,in-progress,resolved',
            ]);

            if($validator->fails()){

                return $this->sendError('Error validation', $validator->errors()->first());       
            }
            $complaint_id=mt_rand(1000000, 9999999);          
            $user_id= $request->user()->id;


            return response()->json([
                'message' => 'Successfully register',
            ]);
        }
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
       
    }

   

}
