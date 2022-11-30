<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255',
        //     'password' => 'required|string|min:8'
        // ]);

        // if($validator->fails()){
        //     return response()->json($validator->errors());
        // }

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);

        // $token = $user->createToken('auth_token')->plainTextToken;

        // return response()
        //     ->json(['data' => $user,'access_token' => $token, 'token_type' => 'Bearer', ]);
    }


    public function login(Request $request) {
        // $validate = Validator::make($request->all(),[
        //     'email' => 'required|string',
        //     'password' => 'required|string'
        // ]);

        // if ($validate->fails()){
        //     return response()->json($validate->errors());
        // }

        // // Check email
        // $user = User::where('email', $request['email'])->first();

        // // Check password
        // if(!$user || !Hash::check($request['password'], $user->password)) {
        //     return response([
        //         'message' => 'password not exist'
        //     ], 401);
        // }

        // $token = $user->createToken('myapptoken')->plainTextToken;

        // $response = [
        //     'user' => $user,
        //     'token' => $token
        // ];

        // return response($response, 201);
    }

    // method for user logout and delete token
    public function logout(Request $request)
    {
        // auth()->user()->tokens()->delete();

        // return [
        //     'message' => 'You have successfully logged out and the token was successfully deleted'
        // ];
    }


}
