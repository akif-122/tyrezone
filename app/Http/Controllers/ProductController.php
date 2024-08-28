<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Size;
use App\Models\Product;
use App\Models\Manufacturer;
use App\Models\TyrePattern;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class ProductController extends Controller
{

    public function add(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'manu_name' => 'required|string|max:255',
            'pattern_type' => 'required|string|max:255',
            'fuel' => 'required|string|max:255',
            'wet_grip' => 'required|string|max:255',
            'road_noise' => 'required|string|max:255',
            'width' => 'required|numeric',
            'profile' => 'required|numeric',
            'rim' => 'required|string',
            'speed' => 'required|string',
            'type' => 'required|string|max:255',
            'season' => 'required|integer',
            'budget' => 'nullable|boolean',
            'price' => 'required|numeric',
        ]);

        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Check for existing product to avoid duplication
        $existingProduct = Product::where('name', $request->input('name'))
            ->where('manufacturer_name', $request->input('manu_name'))
            ->first();

        if ($existingProduct) {
            // If a product with the same name and manufacturer already exists
            return redirect()->back()->with('error', 'Product with the same name and manufacturer already exists!');
        }

        // Create the product
        $product = Product::create([
            'name' => $request->input('name'),
            'image' => $imagePath,
            'manu_name' => $request->input('manu_name'),
            'pattern_type' => $request->input('pattern_type'),
            'fuel' => $request->input('fuel'),
            'wet_grip' => $request->input('wet_grip'),
            'road_noise' => $request->input('road_noise'),
            'type' => $request->input('type'),
            'season' => $request->input('season'),
            'budget' => $request->input('budget') ? 1 : 0,
            'price' => $request->input('price'),
        ]);

        // Create size entry
        Size::create([
            'product_id' => $product->id,
            'width' => $request->input('width'),
            'profile' => $request->input('profile'),
            'rim' => $request->input('rim'),
            'speed' => $request->input('speed'),
        ]);

        return redirect()->route('adminProducts');
    }



    public function edit($id)
    {
        if(auth()->user()){
        $product = Product::findOrFail($id);
        $manufacturer = Manufacturer::get();
        $pattern = TyrePattern::get();
        return view('admin.edit-product', compact('product', 'manufacturer', 'pattern'));
    } else {
            return redirect()->route('adminIndex');
        }
}

    // UPDATE PRODUCT
    public function update(Request $request)
    {
        if(auth()->user()){
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
    } else {
            return redirect()->route('adminIndex');
        }
}
    public function showInfo()
    {
        if(auth()->user()){
        // Fetch all products from the database
        $products = Product::all();
        // $id = auth()->user()->id;
        // $admin = Admin::find($id);
        // Pass products to the view
        return view('admin.products', compact('products'));
    } else {
            return redirect()->route('adminIndex');
        }
}
    public function showInfoOnMain()
    {
        if(auth()->user()){
        // Fetch all products from the database
        $products = Product::all();

        // Pass products to the view
        return view('products', compact('products'));
    } else {
            return redirect()->route('adminIndex');
        }
}
    public function destroy(Request $request)
    {
        if(auth()->user()){
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
    } else {
            return redirect()->route('adminIndex');
        }
}

    function render()
    {
        $products = Product::get();
        $all = Product::first();
        $all->manufacturer_name = 'All';
        $record = Manufacturer::get();
        return view('manufacturers', compact('products', 'record', 'all'));
}
    public function category($manufacturer = "")
    {
        $products = Product::where('manufacturer_name', $manufacturer)->get();
        $record = Manufacturer::get();
        $all = $products;
        $all->manufacturer_name = $manufacturer;

        return view('manufacturers', compact('products', 'record', 'all'));
    }
    public function category_pattern($pattern = "")
    {
        $products = Product::where('tyre_pattern', $pattern)->get();
        $tyre_pattern = TyrePattern::get();
        $all = $products;
        $all->name = $pattern;
        return view('tyre-pattren', compact('tyre_pattern', 'products', 'all'));
    }
    public function viewCart($id)
    {
        // Retrieve the product with the specific ID
        $product = Product::findOrFail($id);

        // Initialize the cart in the session if it does not exist
        if (!session()->has('cart')) {
            session()->put('cart', []);
        }

        // Get the current cart from the session
        $cart = session()->get('cart');

        // Append the selected product to the cart
        // Ensure the product is not already in the cart to avoid duplicates
        if (!array_key_exists($id, $cart)) {
            // Wrap product details in an object
            $cart[$id] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'image' => $product->image,
                    'season' => $product->season,  // Add season
                    'manufacturer_name' => $product->manufacturer_name,  // Add manufacturer name
                    'size' => $product->size,  // Add size
                    'quantity' => 1, // Default quantity
                ];
            session()->put('cart', $cart);
        } else {
            // Increment the quantity if the product is already in the cart
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
        }

        // Pass the cart to the 'cart' view
        return view('cart', ['cart' => $cart]);
    }




    public function checkout()
    {

        // Check if the cart is empty
        if (!session()->has('cart') || count(session('cart')) === 0) {
            // Redirect to the cart page with a warning if the cart is empty
            return redirect()->route('cart')->with('warning', 'Your cart is empty. Add items to your cart before proceeding to checkout.');
        }

        // The user is authenticated and the cart is not empty, proceed to the checkout page
        return view('checkout');
    }

    public function removeFromCart($id)
    {
        // Get the current cart from the session
        $cart = session()->get('cart');

        // Remove the item with the given ID
        if (array_key_exists($id, $cart)) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        // Redirect back to the cart page
        return redirect()->route('cart');
    }

    public function updateCart(Request $request)
    {
        $cart = session()->get('cart', []);
        $id = $request->id;
        $quantity = $request->quantity;

        // Update the quantity in the cart
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
            session()->put('cart', $cart);
        }

        // Calculate the updated totals
        $itemTotal = $cart[$id]['price'] * $quantity;
        $subtotal = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));
        $total = $subtotal; // You can adjust this if there are any additional charges, taxes, etc.

        // Return JSON response
        return response()->json([
            'success' => true,
            'itemTotal' => number_format($itemTotal, 2),
            'subtotal' => number_format($subtotal, 2),
            'total' => number_format($total, 2),
        ]);
    }
    // CartController.php
    // CartController.php

    public function fetchCart()
    {
        // Get the cart from the session
        $cart = session()->get('cart', []);

        // Calculate the total number of unique items in the cart
        $totalItems = count($cart); // Unique items based on the keys of the cart array

        // Return the cart and total items as a JSON response
        return response()->json([
            'cart' => $cart,
            'totalItems' => $totalItems,
        ]);
    }



    public function updateSideCart(Request $request)
    {
        $productId = $request->input('product_id');
        $action = $request->input('action');
        $cart = session()->get('cart', []);

        // Initialize product if not present in the cart
        if (!isset($cart[$productId])) {
            $cart[$productId] = [
                'quantity' => 1, // Initialize to 1
                'price' => $request->input('price'),
                'name' => $request->input('name'),
                'image' => $request->input('image')
            ];
        }

        if (isset($cart[$productId])) {
            if ($action == 'increase') {
                $cart[$productId]['quantity'] += 1;
            } elseif ($action == 'decrease'
            ) {
                if ($cart[$productId]['quantity'] > 1) {
                    $cart[$productId]['quantity'] -= 1;
                } else {
                    unset($cart[$productId]);
                }
            }
            session()->put('cart', $cart);
        }

        return response()->json([
            'success' => true,
            'cart' => $cart,
            'totalItems' => array_sum(array_column($cart, 'quantity')) // Total number of items in the cart
        ]);
    }




    public function removeFromSideCart(Request $request)
    {
        $productId = $request->input('product_id');
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return response()->json(['success' => true, 'cart' => $cart]);
    }

}
