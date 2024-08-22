<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function fetchUserData(Request $request)
    {
        // Get the currently authenticated user
        $user = Auth::user();

        if ($user) {
            return response()->json([
                'success' => true,
                'data' => [
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'email' => $user->email,
                    'address' => $user->address,
                    'postcode' => $user->postcode,
                    'company' => $user->company,
                    'city' => $user->city,
                ],
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'No user data found',
        ]);
    }
}
