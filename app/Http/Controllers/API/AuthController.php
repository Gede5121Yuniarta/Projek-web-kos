<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'data' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function login(Request $request)
    {
        if (! Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login success',
            'access_token' => $token,
            'token_type' => 'Bearer'
        ]);
    }

    public function logout()
    {
        $user = Auth::user();
        $user->tokens->each(function ($token, $key) {
            $token->delete();
        });
        return response()->json([
            'message' => 'logout success'
        ]);

        // Auth::user()->tokens()->delete();
        // return response()->json([
        //     'message' => 'logout success'
        // ]);
    }


    // public function login(Request $request){
    //     $request->validate([
    //         'email'=>'required|email',
    //         'password'=>'required',
    //     ]);
    //     $user=User::where('email',$request->email)->first();
    //     if (! $user || ! Hash::check($request->password, $user->password)) {
    //         return response()->json([
    //             'success'=>false,
    //             'message'=>'Unauthorized',
    //         ],401);
    //     }
        // $user->tokens()->delete();
        // $token=$user->createToken($request->device_name)->plainTextToken;
        // return response()->json([
        //     'success'=>true,
        //     'message'=>'success',
        //     'user'=>$user,
        //     'token'=>$token
        // ],200);
    // }
}
