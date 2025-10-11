<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $nama = "Mahasiswa Unsika";
        // return view ('produk', ['nama'=> $nama, 'alertMessage' => 'Selamat belajar blade', 'alertType'=> 'success']);

        // Ambil semua data produk dari database
        $products = Product::all();

        // Tampilkan view tabel product
        return view('master-data.product-master.manage-product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("master-data.product-master.create-product");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input data
        $validasi_data = $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'information' => 'nullable|string',
            'qty' => 'required|integer',
            'producer' => 'required|string|max:255',
        ]);

        // Proses simpan data ke dalam database
        Product::create($validasi_data);

        return redirect()->route('product-index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('barang', ['isi_data' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Ambil data product berdasarkan ID
        $product = Product::findOrFail($id);

        // Tampilkan form edit dengan data produk
        return view('master-data.product-master.edit-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'information' => 'nullable|string',
            'qty' => 'required|integer',
            'producer' => 'required|string|max:255',
        ]);

        // Update data
        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('product-index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hapus data berdasarkan ID
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product-index')->with('success', 'Product deleted successfully!');
    }
}
