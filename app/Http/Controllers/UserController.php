<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function filter(Request $request)
    {
        // Get the selected filter criteria
        $width = $request->input('width');
        $profile = $request->input('profile');
        $rim_size = $request->input('rim_size');
        $speed = $request->input('speed');

        // Fetch all sizes to use in the form options
        $data = DB::table('size')->get();

        // Query the database based on the filters
        $query = DB::table('size')
        ->join('products', 'size.product_id', '=', 'products.id')
        ->select('products.*')  // Select all columns from products table
        ->distinct();

        if ($width) {
            $query->where('width', $width);
        }
        if ($profile) {
            $query->where('profile', $profile);
        }
        if ($rim_size) {
            $query->where('rim_size', $rim_size);
        }
        if ($speed) {
            $query->where('speed', $speed);
        }

        $filteredSizes = $query->get();

        // Return the view with the filtered data
        return view('index', ['data' => $data, 'filteredSizes' => $filteredSizes]); // Replace 'your_view_name' with your actual view name
    }
    public function main(){
        $data = DB::table('size')->whereNotNull('product_id')-> get();
        return view('index', compact('data'));
    }
    public function fetchUserData(Request $request)
    {
        // Get the currently authenticated user
        $user = Auth::user();

        if ($user) {
            return response()->json([
                'success' => true,
                'data' => [
                    'first_name' => $user->f_name,
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
    public function changePassword(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'user-id' => 'required|exists:users,id', // Ensure user-id exists in the users table
            'opassword' => 'required', // Old password field
            'npassword' => 'required|min:8|confirmed', // New password field must be confirmed and at least 8 characters long
        ]);

        // Retrieve the authenticated user
        $userChange = Auth::user();

        // Check if the old password is correct
        if (!Hash::check($validatedData['opassword'], $userChange->password)) {
            return redirect()->back()->withErrors(['opassword' => 'The old password is incorrect.']);
        }

        // Update the user's password
        $userChange->password = Hash::make($validatedData['npassword']);
        // $userChange->save();

        // Redirect with success message
        return redirect()->route('dashboard')->with('status', 'Password changed successfully.');
    }
    public function validateCredentials(Request $request)
    {
        // Extract the email and password from the request
        $email = $request->input('emailInput');
        $password = $request->input('password');

        // Build the credentials array
        $credentials = [
            'email' => $email,
            'password' => $password // Normally, passwords should be handled as strings
        ];

        // Check if the user is already authenticated
        if (auth()->check()){
            return response()->json([
                'message' => 'Already Logged in',
            ]);
        }

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Regenerate the session to prevent session fixation attacks
            $request->session()->regenerate();
            return response()->json(['message' => 'Login successful!'], 200);
        } else {
            return response()->json(['message' => 'Invalid email or password.'], 401);
        }
    }

}
