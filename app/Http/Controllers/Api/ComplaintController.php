<?php

namespace App\Http\Controllers\Api;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\BaseController as BaseController;

class ComplaintController extends BaseController
{

    function track(Request $request)
    {
        if ($request->user()) { 
        $complaints = Complaint::where('user_id', $request->user()->id)->paginate(10);
        return response()->json($complaints);
        }  
    }

    function tracksingle(Request $request)
    {
        if ($request->user()) { 
        $complaint = Complaint::where('id', $request->id)->first();
        return response()->json($complaint);
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
                'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'status' => 'required|string|in:new,in-progress,resolved',
            ]);

            if($validator->fails()){

                return $this->sendError('Error validation', $validator->errors()->first());       
            }

            $data = $validator->validated();
            $data['complaint_id']=mt_rand(1000000, 9999999);          
            $data['user_id']= $request->user()->id;
            $complaint = Complaint::create($data);

            if ($request->hasFile('photo')) {
                $complaint->addMediaFromRequest('photo')->toMediaCollection('images');
            }
            

            return $this->sendResponse($data, 'Complaint created successfully.');

        }
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
       
    }

   

}
