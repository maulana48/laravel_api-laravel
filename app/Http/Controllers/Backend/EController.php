<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File; 

class EController extends Controller
{
    public function index(){
        $listBarang = Product::all();
        return response()->json([
            'status' => true,
            'message' => '',
            'data' => $listBarang
        ]);
    }
    public function show($id){
        $barang = Product::find($id);
        return response()->json([
            'status' => true,
            'message' => '',
            'data' => $barang
        ]);
    }
    public function create(){
        
    }
    public function store(Request $request){
        $rules = [
            'nama' => 'required|max:255',
            'harga' => 'required',
            'diskon' => 'required',
            'foto' => 'required',
        ];
        $payload = $request->validate($rules);
        if($payload['foto']){
            $payload['foto'] = $request->file('foto')->store('img/product', ['disk' => 'public_uploads']);
        }
        Product::create($payload);
        $createdProduct = $payload;

        return response()->json([
            'status' => true,
            'message' => 'Product berhasil dibuat',
            'data' => $createdProduct
        ]);
    }

    public function edit(Product $product){
        
    }

    public function update(Request $request, Product $product){
        $rules = [
            'nama' => 'required|max:255',
            'harga' => 'required',
            'diskon' => 'required'
        ];
        $payload = $request->validate($rules);
        if($request->foto){
            $payload['foto'] = $request->file('foto')->store('img/product', ['disk' => 'public_uploads']);
        }
        $product->update($payload);

        return response()->json([
            'status' => true,
            'message' => 'Product berhasil diupdate',
            'data' => $product
        ]);
    }

    public function destroy(Request $request, Product $product){
        File::delete(public_path('uploads/csv/img.png'));
        $product->delete();

        return response()->json([
            'status' => true,
            'message' => 'Product berhasil dihapus',
            'data' => $product
        ]);
    }
}
