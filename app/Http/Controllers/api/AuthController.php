<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // // Register
    // public function createUser(Request $request){

    //     try {
    //         // Validate the datas
    //         $validateUser = Validator::make($request->all(), [
    //             'name' => 'required',
    //             'email' => 'required|email|unique:users,email',
    //             'password' => 'required'
    //         ]);
    
    //         // Error message if fails
    //         if($validateUser->fails()){
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'validation error',
    //                 'errors' => $validateUser->errors()
    //             ],401);
    //         }
    //         // Create user
    //         $user = User::create([
    //             'name' => $request->name,
    //             'email' => $request->email,
    //             'password' => Hash::make($request->password)
    //         ]);
    //         // Sucess Message
    //         return response()->json([
    //             'status' => true,
    //             'message' => 'sucessfully',
    //             // Create the authorisation token
    //             'token' => $user->createToken("API TOKEN")->plainTextToken,
    //         ],200);
    //     } catch (\Throwable $th) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => $th->getMessage(),
    //         ],500);
    //     }
    // }

    // // Login
    //     public function loginUser(Request $request){
    //          // Validate the datas
    //          $validateUser = Validator::make($request->all(), [
    //             'email' => 'required',
    //             'password' => 'required'
    //         ]);
    
    //         // Error message if fails
    //         if($validateUser->fails()){
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'validation error',
    //                 'errors' => $validateUser->errors()
    //             ],401);
    //         }
    //         // Error message for wrong datas
    //         if(!Auth::attempt($request->only(['email', 'password']))){
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'Email & Password does not match with our record',
    //             ],401);
    //         }

    //         // Login User 
    //         $user = User::where('email', $request->email)->first();
    //             return response()->json([
    //                 'status' => true,
    //                 'message' => 'Sucessfully, user Authenticated',
    //                 'token' => $user->createToken("API TOKEN")->plainTextToken
    //             ],200);
    //     }
}
