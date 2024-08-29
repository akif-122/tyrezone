<?php
namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use App\Models\Size; // Make sure you import your model

class TyreSizeController extends Controller
{
   function showTyreSizes(){
    $allSizes = Size::all()->whereNull('product_id');
    return view('admin.tyre-sizes',compact('allSizes'));
   }
    public function saveSize(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'width' => 'required|string|max:255',
            'profile' => 'required|string|max:255',
            'rim_size' => 'required|string|max:255',
            'speed' => 'required|string|max:255',
            'product_id' => 'nullable|exists:products,id', // Validate product_id if provided
        ]);

        // Check if a record with the same attributes already exists
        $existingSize = Size::where('width', $validated['width'])
            ->where('profile', $validated['profile'])
            ->where('rim_size', $validated['rim_size'])
            ->where('speed', $validated['speed'])
            ->where(function ($query) use ($request) {
                // If product_id is null, make sure it matches
                $query->whereNull('product_id')
                    ->orWhere('product_id', $request->input('product_id'));
            })
            ->first();

        if ($existingSize){
            // If a duplicate is found, redirect back with an error message
            return redirect()->route('tyre-sizes')->with('error', 'Tyre size already exists!');
        }

        // Create a new size record in the database
        $size = new Size();
        $size->width = $validated['width'];
        $size->profile = $validated['profile'];
        $size->rim_size = $validated['rim_size'];
        $size->speed = $validated['speed'];

        $size->save();

        // Redirect back to the form or another route with a success message
        return redirect()->route('tyre-sizes')->with('success', 'Tyre size added successfully!');
    }
    public function deleteSize($id)
    {
        // Find the size by its ID
        $size = Size::find($id);

        if (!$size) {
            // If no size is found, redirect back with an error message
            return redirect()->route('tyre-sizes')->with('error', 'Tyre size not found!');
        }

        // Delete the size record
        $size->delete();

        // Redirect back to the size list with a success message
        return redirect()->route('tyre-sizes')->with('success', 'Tyre size deleted successfully!');
    }
    public function edit($id)
    {
        $size = Size::findOrFail($id); // Fetch the size record
        return view('admin.edit-tyre-size', compact('size')); // Pass the size to the view
    }

    // Update the specified size in the database
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'width' => 'required|string|max:255',
            'profile' => 'required|string|max:255',
            'rim_size' => 'required|string|max:255',
            'speed' => 'required|string|max:255',
        ]);

        $size = Size::findOrFail($id); // Fetch the size record to update
        $size->width = $request->input('width');
        $size->profile = $request->input('profile');
        $size->rim_size = $request->input('rim_size');
        $size->speed = $request->input('speed');
        $size->save(); // Save the updated size record

        return redirect()->route('tyre-sizes')->with('success', 'Tyre size updated successfully!');
    }

}