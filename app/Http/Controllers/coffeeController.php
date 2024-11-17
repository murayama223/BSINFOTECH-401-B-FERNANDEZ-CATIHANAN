<?php

namespace App\Http\Controllers;

use App\Models\coffee;
use Illuminate\Http\Request;

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
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
            'weight' => 'required|integer|min:1',
        ]);

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
