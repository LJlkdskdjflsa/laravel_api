<?php

namespace App\Http\Controllers;

use App\Models\User;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
//User CRUD
    //create
    /**
     * @OA\Post(
     *     path="/api/user/register",
     *     summary="Register",
     *     description="Register new user",
     *     operationId="authRegister",
     *     tags={"auth"},
     *     summary="Register a new user",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="email",
     *                     type="email"
     *                 ),
     *                 @OA\Property(
     *                     property="password",
     *                     type="password"
     *                 ),
     *                 @OA\Property(
     *                     property="password_confirmation",
     *                     type="password"
     *                 ),
     *                 example={
     *                      "name": "LJ",
     *                      "email": "LJ@gmail.com",
     *                      "password": "12345678",
     *                      "password_confirmation": "12345678",
     *                  }
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
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
        return response()->json($response, \Symfony\Component\HttpFoundation\Response::HTTP_OK);
    }

    // read
    public function index()
    {

    }

    /**
     * @OA\Post(
     *     path="/api/user/update",
     *     summary="Update",
     *     description="Update user information",
     *     operationId="update",
     *     tags={"auth"},
     *     security={{"bearer_token":{}}},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="name",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="email",
     *                     type="email"
     *                 ),
     *                 example={
     *                      "name": "LJ",
     *                      "email": "LJ@gmail.com"
     *                  }
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="OK"
     *     )
     * )
     */
    public function update(Request $request)
    {
        $user =auth()->user();
        $fields = $request ->validate([
            'name' => 'required|string',
            'email' => 'email',
        ]);
        $user->update([
            'name' => $fields['name'],
            'email' => $fields['email'],
        ]);
        return response()->json($user, \Symfony\Component\HttpFoundation\Response::HTTP_OK);
    }

    // delete
    public function destroy()
    {

    }
    /**
     * @OA\Post(
     * path="/api/user/login",
     * summary="Sign in",
     * description="Login by email, password",
     * operationId="login",
     * tags={"auth"},
     * @OA\RequestBody(
     *    required=true,
     *    description="Pass user credentials",
     *    @OA\JsonContent(
     *       required={"email","password"},
     *       @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     *       @OA\Property(property="password", type="string", format="password", example="PassWord12345"),
     *       @OA\Property(property="persistent", type="boolean", example="true"),
     *    ),
     * ),
     * @OA\Response(
     *    response=422,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    public function login(Request $request)
    {
        $fields = $request ->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $user = User::where('email', $fields['email'])->first();

        try {
        // Check email
            $user = User::where('email', $fields['email'])->first();
            echo $user;
        } catch (ErrorException $e) {
            echo $e;
        }
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

    /**
     * @OA\Post(
     * path="/api/user/logout",
     * summary="Logout",
     * description="Logout user and invalidate token",
     * operationId="logout",
     * tags={"auth"},
     * security={{"bearer_token":{}}},
     * @OA\Response(
     *    response=200,
     *    description="Success"
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Not authorized"),
     *    )
     * )
     * )
     */
    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }

    //function

    /**
     * @OA\Post(
     * path="/api/user/profile",
     * summary="Profile",
     * description="The infomation about the user",
     * operationId="profile",
     * tags={"auth"},
     * security={{"bearer_token":{}}},
     *
     * @OA\Response(
     *    response=200,
     *    description="Success"
     *     ),
     * @OA\Response(
     *    response=401,
     *    description="Returns when user is not authenticated",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Not authorized"),
     *    )
     * )
     * )
     */
    public function profile()
    {
        $user = User::find(auth()->id());
        return response()->json($user, \Symfony\Component\HttpFoundation\Response::HTTP_OK);
    }
}
