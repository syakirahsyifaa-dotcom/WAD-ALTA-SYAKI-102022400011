<?php

namespace App\Http\Controllers;

use App\Models\Product; // <-- WAJIB
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all(); // FIX: Product, bukan product
        return view('admin.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required|numeric|min:0',
            'image'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // FIX: mines
        ]);

        $productData = $request->only('name', 'description', 'price');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $productData['image'] = $imagePath;
        }

        // FIX: butuh relasi di Model User: products()
        Auth::user()->products()->create($productData);

        session()->flash('success', 'Produk berhasil dibuat!');
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id); // FIX
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id); // FIX
        return view('admin.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id); // FIX: WAJIB ADA

        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required|numeric|min:0',
            'image'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // FIX
        ]);

        $productData = $request->only('name', 'description', 'price');

        if ($request->hasFile('image')) {

            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }

            $imagePath = $request->file('image')->store('products', 'public');
            $productData['image'] = $imagePath;
        }

        $product->update($productData);

        session()->flash('success', 'Produk berhasil diperbarui!');
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id); // FIX
        
        if ($product->image){
            Storage::delete('public/' . $product->image);
        }

        $product->delete();

        session()->flash('success', 'Produk berhasil dihapus!');
        return redirect()->route('admin.index');
    }
}
