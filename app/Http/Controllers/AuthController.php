<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;
use Illuninate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        dd($request);
        $this->validate($request, [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        /** @var User $user */
        $user = User::query()
            ->firstOrCreate([
                'email' => $request->get('email'),
            ], [
                'name' => $request->get('name'),
                'password' => Hash::make($request->get('password')),
            ]);
           

        if (!$user->wasRecentlyCreated) {
            return response()
                ->json([
                    'status' => 0,
                    'error' => [
                        'code' => 1,
                        'message' => 'This email address has been registered.'
                    ],
                ]);
        }

        // Generate new token
        $token = $user->createToken('email');

        return response()
            ->json([
                'status' => 1,
                'data' => [
                    'token' => $token->plainTextToken,
                ],
            ]);
    }
    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        /** @var User $user */
        $user = User::query()
            ->where('email', '=', $request->get('email'))
            ->first();

        if ($user === null || !Hash::check($request->get('password'), $user->password)) {
            return response()
                ->json([
                    'status' => 0,
                    'error' => [
                        'code' => 1,
                        'message' => 'These credentials do not match our records.',
                    ],
                ]);
        }
        

        // Generate new token
        $token = $user->createToken('email');

        return response()
            ->json([
                'status' => 1,
                'data' => [
                    'token' => $token->plainTextToken,
                ],
            ]);
    }

}
