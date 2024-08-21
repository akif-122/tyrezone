<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\TyrePattern;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function tyre_pattern()
    {
        if(auth()->user()){
        $record = session('pattern');
        return view('admin.tyre-pattern', compact('record'));
        }
        else{
           return redirect()->route('adminIndex');
        }
    }
    public function addManufacturer(Request $request)
    {
        if(auth()->user()){
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|string|max:255', // Adjust validation as needed for image URLs or file paths
            'excerpt' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);
        // Check if the product already exists
        $exists = Manufacturer::where('name', $request->name)->exists();

        if ($exists) {
            return redirect()->back()->withErrors('Product already exists.');
        }
        // Create a new manufacturer instance
        $manufacturer = new Manufacturer;

        // Manually set each attribute
        $manufacturer->name = $validatedData['name'];
        $manufacturer->image = $validatedData['image'] ?? null; // Default to null if not provided
        $manufacturer->excerpt = $validatedData['excerpt'] ?? null; // Default to null if not provided
        $manufacturer->description = $validatedData['desc'] ?? null; // Default to null if not provided

        // Save the manufacturer record to the database
        $manufacturer->save();

        // Fetch all manufacturers to display in the view
        $record = Manufacturer::all();
        return view('admin.manufacturers', compact('record'));
    } else {
            return redirect()->route('adminIndex');
        }

    }
    public function index()
    {
        if(auth()->user()){

        $record = Manufacturer::all();
        return view('admin.manufacturers', compact('record'));
        } else {
            return redirect()->route('adminIndex');
        }
    }
    public function destroy(Request $request)
    {
        if(auth()->user()){
        // Validate the incoming request to ensure 'name' is provided
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Retrieve the name from the request
        $name = $request->input('name');

        // Find the manufacturer by name
        $manufacturer = Manufacturer::where('name', $name)->first();

        // Check if the manufacturer exists
        // if (!$manufacturer) {
        //     return redirect()->back()->with('error', 'Manufacturer not found');
        // }

        // Delete the manufacturer
        $manufacturer->delete();
        $record = Manufacturer::get();
        // Redirect back with a success message
        return view('admin.manufacturers', compact('record'))->with('success', 'Manufacturer deleted successfully');
    } else {
            return redirect()->route('adminIndex');
        }
}
    public function edit($id)
    {
        if(auth()->user()){
        $product = Manufacturer::findOrFail($id);

        return view('admin.edit-manufacture', compact('product'));
        } else {
            return redirect()->route('adminIndex');
        }
    }
    public function update(Request $request)
    {
        if(auth()->user()){
        // Validate the incoming request data
        $request->validate([
            'id' => 'required|exists:manufacturers,id', // Ensure the ID is valid and exists
            'name' => 'required|string|max:255|unique:manufacturers,name,' . $request->input('id'), // Ensure the name is unique except for the current record
            'image' => 'nullable|string|max:255', // Adjust validation as needed for image URLs or file paths
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        // Find the manufacturer by ID
        $manufacturer = Manufacturer::find($request->input('id'));

        // Check if the manufacturer exists
        if (!$manufacturer) {
            return redirect()->route('adminManufacturers')->withErrors(['Manufacturer not found']);
        }

        // Update the manufacturer record
        $manufacturer->name = $request->input('name');
        $manufacturer->image = $request->input('image');
        $manufacturer->excerpt = $request->input('excerpt');
        $manufacturer->description = $request->input('desc');

        // Save the changes
        $manufacturer->save();

        // Redirect with a success message
        return redirect()->route('adminManufacturers')->with('success', 'Manufacturer updated successfully');
    } else {
            return redirect()->route('adminIndex');
        }
}
    public function save_tyre_pattern(Request $request)
    {
        if(auth()->user()){
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'manu_id' => 'required|string|max:255', // Adjust validation as needed for image URLs or file paths
        ]);
        // Check if the product already exists
        $exists = TyrePattern::where('name_of_manufacturer', $request->name)->exists();

        if ($exists) {
            return redirect()->back()->withErrors('Product already exists.');
        }
        // Create a new manufacturer 
        $tyre_pattern = new TyrePattern;

        // Manually set each attribute
        $tyre_pattern->name_of_manufacturer = $validatedData['name'];
        $tyre_pattern->type_of_pattern = $validatedData['manu_id']; // Default to null if not provided

        // Save the manufacturer record to the database
        $tyre_pattern->save();

        // Fetch all manufacturers to display in the view
        $record = TyrePattern::get();
        return view('admin.tyre-pattern', compact('record'));
    } else {
            return redirect()->route('adminIndex');
        }
}
    public function delete_tyre_pattern(Request $request)
    {
        if(auth()->user()){
        $tyre_pattern = TyrePattern::findOrFail($request->name);
        $tyre_pattern->delete();
        $record = TyrePattern::get();
        return view('admin.tyre-pattern', compact('record'));
    } else {
            return redirect()->route('adminIndex');
        }
}
    public function edit_pattern($id)
    {
        if(auth()->user()){
        $manufacturers = Manufacturer::all();
        $record = TyrePattern::findOrFail($id);

        return view('admin.edit-pattern', compact('record', 'manufacturers'));
    } else {
            return redirect()->route('adminIndex');
        }
}
    public function update_pattern(Request $request)
    {
        if(auth()->user()){
        // Validate the incoming request data
        $request->validate([
            'id' => 'required|exists:tyre_patterns,id', // Ensure the ID exists in the tyre_patterns table
            'name' => 'required|string|max:255|unique:tyre_patterns,name_of_manufacturer,' . $request->input('id'), // Ensure the name is unique, except for the current record
            'manu_id' => 'required|string|max:255', // Adjust this based on what manu_id represents (here assumed as type_of_pattern)
        ]);

        // Find the tyre pattern by ID
        $tyrePattern = TyrePattern::findOrFail($request->input('id')); // findOrFail will automatically handle the case where the ID doesn't exist

        // Update the tyre pattern record
        $tyrePattern->name_of_manufacturer = $request->input('name');
        $tyrePattern->type_of_pattern = $request->input('manu_id');

        // Save the changes
        $tyrePattern->save();

        // Redirect or return view with a success message
        return view('admin.dashboard');
    } else {
            return redirect()->route('adminIndex');
        }
}
    public function add_dynamic_options()
    {
        $manufacturer = Manufacturer::get();
        $pattern = TyrePattern::get();
        return view('admin.add-product', compact('manufacturer'), compact('pattern'));
    }
    public function dynamic_manufactuer_option()
    {
        $manufacturer = Manufacturer::get();
        return view('admin.add-pattern', compact('manufacturer'));
    }
    public function render_pattern(){
        if(auth()->user()){

        $products = Product::get();
        $tyre_pattern = TyrePattern::get();
        $all = Product::first();
        $all->name = 'All';
        return view('tyre-pattren',compact('tyre_pattern','products','all'));
    } else {
            return redirect()->route('adminIndex');
        }
}

}
