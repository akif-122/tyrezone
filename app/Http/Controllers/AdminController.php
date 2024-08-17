<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\TyrePattern;
use App\Models\users;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    /**
     * Handle the login request and compare credentials.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve the email and password from the request
        $email = $validatedData['email'];
        $password = $validatedData['password'];

        // Fetch the admin record from the database based on the provided email
        $admin = Admin::where('email', $email)->first();

    // Check if an admin was found and if the password matches
    if ($admin && $password === $admin->password){
        // Log the user in
        Auth::login($admin);
        // $last_name = $admin->last_name;
        request()->session()->regenerate();
            $manufacturers = Manufacturer::all() ?? collect();
            $pattern = TyrePattern::all() ?? collect();
            $product = Product::all() ?? collect();
        $manufacturersCount = Manufacturer::count();
        $patternCount = TyrePattern::count();
        $productCount = Product::count();
        $usersCount = users::count();
        session([
            'manufacturers' => $manufacturers,
            'pattern'=> $pattern,
            'product'=> $product,
            'manufacturers_count' => $manufacturersCount,
            'pattern_count' => $patternCount,
            'product_count' => $productCount,
            'users_count' => $usersCount,
        ]);
            // Redirect to the dashboard with a success message
            if(auth()->check())
            return redirect()->route("adminDashboard");
            // return view('admin.dashboard',compact('manufacturers','pattern','product'));
            else
            return redirect()->route("adminIndex");

    }
// If authentication fails, throw a validation exception with a custom message
    throw ValidationException::withMessages([
        'email' => ['The provided credentials are incorrect.'],
    ]);
        // Check if an admin was found and if the password matches
    }

    public function dashIndex()
    {
        // $manufacturers = Manufacturer::all();
        // $pattern = TyrePattern::all();
        // $product = Product::all();
        // // Redirect to the dashboard with a success message
        // return view('admin.dashboard', compact('manufacturers', 'pattern', 'product'));
    }
    public function logout(Request $request)
    {
        // ** Temprory for all type of users ** // 
        // Log out the user
        Auth::logout();

        // Invalidate the current session
        $request->session()->invalidate();

        // Regenerate the session token to prevent session fixation attacks
        $request->session()->regenerateToken();

        // Clear the cache and redirect
        return redirect('/adminIndex')
        ->with('success', 'Logged out successfully')
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache');
    }
}
