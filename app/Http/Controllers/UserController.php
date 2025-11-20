<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $req)
    {
        $credentials = $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $credentials['username'])->first();

        if( !$user ||  !Hash::check($credentials['password'], $user->password)) {
            return response()->json([
                'msg' => 'Incorrect username or password'
            ],404);
        }

        $token = $user->createToken('login-token')->plainTextToken;

        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'token' => $token,
            'data' => $user
        ],201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function userInfo(Request $request)
    {

        $user = $request->user();

        return response()->json([
            'status' => 'ok',
            'msg' => 'success',
            'data' => $user
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken();

        if($token) {
            $token->delete();
        }

        return response()->json([
            'status' => 'ok',
            'msg' => 'Success Logout'
        ],201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
