<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Illuminate\Http\Request;

class PresenceController extends Controller
{
    public function index()
    {
        $data = 'ini data';
        $presences = Presence::all();
        return view('presences.index', compact('presences'));
    }

    public function create()
    {
        return view('presences.create');
    }

    public function store(Request $request)
    {
        Presence::create($request->all());
        return redirect('presences')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Presence::findOrFail($id);
        return view('presences.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Presence::findOrFail($id);
        $product->update($request->all());
        return redirect('presences')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Presence::findOrFail($id);
        $product->delete();
        return redirect('presences')->with('success', 'Product deleted successfully.');
    }
}
