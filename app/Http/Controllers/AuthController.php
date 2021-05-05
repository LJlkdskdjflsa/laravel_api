<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
//User CRUD
    //create
    public function register(Request $request)
    {
        $fields = $request ->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),
        ]);

        $token = $user->createToken('userToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 201);
    }

    // read
    public function index()
    {

    }

    // update
    public function update(Request $request)
    {
        $user =auth()->user();
        $fields = $request ->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed',
        ]);
        return $user;
    }

    // delete
    public function destroy()
    {

    }

    public function login(Request $request)
    {
        $fields = $request ->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        // Check email
        $user_arr = User::where('email', $fields['email'])->get();
        $user = $user_arr[0];
        //check user
        if (!$user || !Hash::check($fields['password'], $user->password)){
            return response([
                'message' => 'Not correct email or password'
            ], 401);
        }

        $token = $user->createToken('userToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 201);
        //return $user[0];
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }

    //function
    public function profile()
    {
        $user = User::find(auth()->id());
        return response()->json($user, \Symfony\Component\HttpFoundation\Response::HTTP_OK);

    }
}
