<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\BaseController as BaseController;

class AuthController extends BaseController
{
    public function signup(Request $request)
    {    
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'mobile_number' => 'required|string',
        ]);

        if($validator->fails()){
            return $this->sendError('Error validation', $validator->errors());       
        }
        $user = User::create([
            'name' => $validator['name'],
            'email' => $validator['email'],
            'password' => $validator['password'],
            'mobile_number' => $validator['mobile_number'],
        ]);
        $data['token'] = $user->createToken('auth_token')->plainTextToken;
        $data['token_type']= 'Bearer';

        return $this->sendResponse($data, 'User created successfully.');
    }


    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $data['token'] =  $user->createToken('auth_token')->plainTextToken; 
            $data['name'] =  $user->name;
            $data['token_type'] =  'Bearer';
   
            return $this->sendResponse($data, 'User Logged in');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 

      
    }



}
