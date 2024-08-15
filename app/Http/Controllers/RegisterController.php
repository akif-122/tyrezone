<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Adjust model name according to your namespace and casing
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function insert(Request $request)
    {
        try {
            // Validate incoming request
            $request->validate([
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email|unique:users,email',
                // Add other validation rules as needed
            ]);

            // If validation passes, create new user
            $user = new User; // Adjust model name according to your namespace and casing
            $user->f_name = $request->fname;
            $user->last_name = $request->lname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->city = $request->city;
            $user->country = $request->country;
            $user->postcode = $request->postcode;
            $user->company_name = $request->company;
            $user->company_phone = $request->company_phone;
            $user->password = Hash::make($request->password);
            // Save the user record
            $user->save();

            // Redirect back with success message
            return redirect('/login')->with('success', 'Registration successful!');
        } catch (ValidationException $e) {
            // Redirect back with validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Handle other exceptions
            return redirect()->back()->withInput()->withErrors(['error' => 'Registration failed.']);
        }
    }
    public function profile(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            $users = DB::table('users')
                    ->where('email', $request->input('email'))
                    ->get();
            // Authentication successful
            return view('/user_dashboard',['users'=>$users]); // Redirect to the intended URL after successful login
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['error' => 'Invalid credentials'])->withInput();
        }
    }
    // app/Http/Controllers/Auth/LoginController.php
    public function create()
    {
        return view('dashboard'); // Return to the view where the form is located
    }
    public function viewAllUsers(Request $request){
        $users = users::get();
        return view('admin.users', compact('users'));
    }
    public function destroy(Request $request)
    {
        // Validate the incoming request to ensure 'email' is provided
        $request->validate([
            'email' => 'required|string|max:255',
        ]);

        // Retrieve the name from the request
        $email = $request->input('email');

        // Find the manufacturer by name
        $users = users::where('email', $email)->first();

        // Check if the manufacturer exists
        // if (!$manufacturer) {
        //     return redirect()->back()->with('error', 'Manufacturer not found');
        // }

        // Delete the manufacturer
        $users->delete();
        $users = users::get();
        // Redirect back with a success message
        return view('admin.users', compact('users'))->with('success', 'user deleted successfully');
    }
    function adminUser(Request $request, $id){
        $user = users::find($id);
        return view('admin.edit-user', compact('user'))->with('success','');
    }
    public function updateUserAdmin(Request $request){
        try {
            // Validate the incoming request data
            $request->validate([
                'id' => 'required|exists:users,id', // Ensure the ID is valid and exists
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email,' . $request->input('id'), // Ensure email is unique except for the current record
                'password' => 'nullable|string|min:6|confirmed', // Ensure password is required and has a minimum length, with confirmation
                'phone' => 'nullable|integer',
                'address' => 'nullable|string|max:255',
                'city' => 'nullable|string|max:255',
                'country' => 'nullable|string|max:255',
                'postcode' => 'nullable|integer',
                'company_name' => 'nullable|string|max:255',
                'company_phone' => 'nullable|string|max:255',
            ]);

            // Find the user by ID
            $user = users::find($request->input('id'));

            // Check if the user exists
            if (!$user) {
                return redirect()->route('adminUsers')->withErrors(['User not found']);
            }

            // Update the user record
            $user->f_name = $request->input('fname');
            $user->last_name = $request->input('lname');
            $user->email = $request->input('email');

            // Only update the password if it is present and different from the existing one
            if ($request->filled('password')) {
                $user->password = Hash::make($request->input('password'));
            }

            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->country = $request->input('country');
            $user->postcode = $request->input('postcode');
            $user->company_name = $request->input('company_name');
            $user->company_phone = $request->input('company_phone');

            // Save the changes
            $user->save();

            // Redirect with a success message
            return redirect()->route('adminUsers')->with('success', 'User updated successfully');
        } catch (ValidationException $e) {
            // Redirect back with validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Handle other exceptions
            return redirect()->back()->withInput()->withErrors(['error' => 'User update failed.']);
        }
        
}
}