<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            return view('dashboard');
        } else {
            return redirect()->route('adminIndex');
        }
    }
    public function dash()
    {
        if (auth()->user()) {
            $manufacturers = session('manufacturers');
            $pattern = session('pattern');
            $product = session('product');
            $manufacturersCount = session('manufacturers_count', 0);
            $productCount = session('product_count', 0);
            $patternCount = session('pattern_count', 0);
            $usersCount = session('users_count', 0);

            // Redirect if any collection is empty
            // if ($manufacturers == null || $pattern->isEmpty() || $product->isEmpty()) {
            //     return redirect()->back();
            // }

            return view('admin.dashboard', compact('manufacturers', 'pattern', 'product', 'patternCount', 'productCount', 'manufacturersCount', 'usersCount'));
        } else {
            return redirect()->route('adminIndex');
        }
    }
}
