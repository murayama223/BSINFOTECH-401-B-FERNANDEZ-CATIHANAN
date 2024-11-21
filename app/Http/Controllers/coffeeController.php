<?php

namespace App\Http\Controllers;

use App\Models\coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class coffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coffee = coffee::all();
        return view('coffee.index', compact('coffee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coffee.create',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255|unique:coffees',
            'price' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'weight' => 'required|integer|min:1',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('picture')) {
            $filePath = $request->file('picture')->store('pictures', 'public');
            $validate['picture'] = $filePath;
        }

        Coffee::create($validate);

        return redirect()->route('coffee.index')->with('success','Coffee product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $coffee = Coffee::findOrFail(($id));
        return view('coffee.show', compact('coffee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $coffee = Coffee::findOrFail($id);
        return view('coffee.edit', compact('coffee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255|unique:coffees,name,' .$id,
            'price' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'weight' => 'required|integer|min:1',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $coffee = Coffee::findOrFail($id);

        if ($request->hasFile('picture')) {
            if ($coffee->picture) {
                Storage::disk('public')->delete($coffee->picture);
            }

            $filePath = $request->file('picture')->store('pictures', 'public');
            $validate['picture'] = $filePath;
        }

        $coffee->update($validate);
        return redirect()->route('coffee.index')->with('success','Coffee product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
public function destroy(string $id)
{
    $coffee = Coffee::findOrFail($id);

    // Check if the coffee has an associated picture and delete it from storage
    if ($coffee->picture) {
        Storage::disk('public')->delete($coffee->picture);
    }

    // Delete the coffee record
    $coffee->delete();

    return redirect()->route('coffee.index')->with('success', 'Coffee product deleted successfully');
}

}
