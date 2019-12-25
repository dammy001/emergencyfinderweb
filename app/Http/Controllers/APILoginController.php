<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class APILoginController extends Controller
{
    //Please add this method
    public function login() {
        // get email and password from request

        $credentials = request(['email', 'password']);

        // try to auth and get the token using api authentication
        if (!$token = auth('api')->attempt($credentials)) {
            // if the credentials are wrong we send an unauthorized error in json format
            return response()->json(['error' => 'Unauthorized', 'errorMessage' => 'Incorrect Email And Password']);
        }
        return response()->json([
            'token' => $token,
            'type' => 'bearer', // you can ommit this
            'expires' => auth('api')->factory()->getTTL() * 60, // time to expiration
            'message' => 'User Login Successfully',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
     {
         $user = User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => $request->password
         ]);
         $token = auth('api')->login($user);
         return $this->respondWithToken($token);

     }

     public function logout(){
         auth('api')->logout();
         return response()->json([
             'message' => 'Successfully Logged out'
         ]);
     }

     protected function respondWithToken($token){
         return response()->json([
             'access_token' => $token,
             'token_type' => 'bearer',
             'expires_in' => auth('api')->factory()->getTTL() * 60,
             'message' => 'User Registered Successfully'
         ]);
     }
}
