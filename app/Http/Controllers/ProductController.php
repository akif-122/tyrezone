<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use App\Models\Manufacturer;
use App\Models\TyrePattern;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

use function PHPUnit\Framework\isEmpty;

class ProductController extends Controller
{
    // protected $admin;
    // public function __construct()
    // {
    //     $this->middleware(function ($request, $next) {
    //         $this->admin = Admin::find(auth()->user()->id);
    //         return $next($request);
    //     });
    // }
    public function add(Request $request)
{
    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|url',
        'manu_name' => 'required|string|max:255',
        'pattern_type' => 'required|string|max:255', // Update to match the form field name
        'fuel' => 'required|string|max:255',
        'wet_grip' => 'required|string|max:255',
        'road_noise' => 'required|string|max:255',
        'size' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'season' => 'required|integer|between:0,2',
        'budget' => 'nullable|boolean',
        'price' => 'required|numeric|min:0',
    ]);

    // Check if the product already exists
    // $exists = Product::where('name', $request->name)
    //     ->where('manufacturer_name', $request->manu_name)
    //     ->exists();

    // if ($exists) {
    //     return redirect()->back()->withErrors('Product already exists.');
    // }

    // Create and save the new product
    Product::create([
        'name' => $request->name,
        'image' => $request->image,
        'manufacturer_name' => $request->manu_name,
        'tyre_pattern' => $request->pattern_type, // Update to match the form field name
        'fuel_efficiency' => $request->fuel,
        'wet_grip' => $request->wet_grip,
        'road_noise' => $request->road_noise,
        'size' => $request->size,
        'tyre_type' => $request->type,
        'season' => $request->season,
        'budget_tyres' => $request->has('budget') ? true : false, // Handle checkbox properly
        'price' => $request->price,
    ]);

    return redirect()->route('adminProducts');
}

    // public function showProducts(){

    //     // Redirect with a success message
    //     $products = Product::all();

    //     // Pass products to the view
    //     return view('products', compact('products'));
    // }
    // public function addPage(){
    //     return view('addProducts');
    // }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $manufacturer = Manufacturer::get();
        $pattern = TyrePattern::get();
        return view('admin.edit-product', compact('product', 'manufacturer', 'pattern'));

    }

    // UPDATE PRODUCT
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|url',
            'manu_name' => 'required',
            'patteren_type' => 'required',
            'fuel' => 'required',
            'wet_grip' => 'required',
            'road_noise' => 'required',
            'size' => 'required',
            'type' => 'required',
            'season' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = Product::find($request->input('id'));

        if (!$product) {
            return redirect()->route('adminProducts')->withErrors(['Product not found']);
        }

        $product->name = $request->input('name');
        $product->image = $request->input('image');
        $product->manufacturer_name = $request->input('manu_name');
        $product->tyre_pattern = $request->input('patteren_type');
        $product->fuel_efficiency = $request->input('fuel');
        $product->wet_grip = $request->input('wet_grip');
        $product->road_noise = $request->input('road_noise');
        $product->size = $request->input('size');
        $product->tyre_type = $request->input('type');
        $product->season = $request->input('season');
        $product->budget_tyres = $request->input('budget') ? 1 : 0;
        $product->price = $request->input('price');

        $product->save();

        return redirect()->route('adminProducts')->with('success', 'Product updated successfully');
    }
    public function showInfo()
    {
        // Fetch all products from the database
        $products = Product::all();
        // $id = auth()->user()->id;
        // $admin = Admin::find($id);
        // Pass products to the view
        return view('admin.products', compact('products'));
    }
    public function showInfoOnMain()
    {
        // Fetch all products from the database
        $products = Product::all();

        // Pass products to the view
        return view('products', compact('products'));
    }
    public function destroy(Request $request)
    {
        // Retrieve name and manufacturer from the request
        $name = $request->input('name');
        $manufacturer_name = $request->input('manufacturer_name');

        // Find the product by name and manufacturer name
        $product = Product::where('name', $name)
            ->where('manufacturer_name', $manufacturer_name)
            ->first();

        if (!$product) {
            return redirect()->route('adminPrdoucts')->withErrors(['Product not found']);
        }

        // Delete the product
        $product->delete();

        return redirect()->route('adminProducts')->with('success', 'Product deleted successfully');
    }

    function render()
    {
        $products = Product::get();
        $all = Product::first();
        $all->manufacturer_name = 'All';
        $record = Manufacturer::get();
        return view('manufacturers', compact('products','record','all'));
    }
    public function category($manufacturer = "")
    {
        $products = Product::where('manufacturer_name', $manufacturer)->get();
        $record = Manufacturer::get();
        $all = $products;
        $all->manufacturer_name = $manufacturer;

        return view('manufacturers',compact('products','record','all'));
    }
    public function category_pattern($pattern = ""){
        $products = Product::where('tyre_pattern', $pattern)->get();
        $tyre_pattern = TyrePattern::get();
        $all = $products;
        $all->name = $pattern;
        return view('tyre-pattren',compact('tyre_pattern','products','all'));
    }
    public function viewCart($id)
    {
        // Retrieve the product with the specific ID
        $record = Product::findOrFail($id);

        // Pass the product to the 'cart' view
        return view('cart', compact('record'));
    }

}