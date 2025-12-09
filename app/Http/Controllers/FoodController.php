<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $food = Food::all();
        return view('admin.food', compact('food'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'price' => 'required|integer',
        ]);

        $imagePath = $request->file('image')->store('food', 'public');

        if(!$imagePath){
            return redirect()->back()->with('error', 'Gagal mengunggah gambar!');
        }
        $data = Food::create([
            'name' => $request->name,
            'image' => $imagePath,
            'price' => $request->price,
        ]);

        return redirect()->back()->with('success', 'Makanan berhasil ditambahkan!');
    }

    public function show($id){
        $food = Food::findOrFail($id);
        return view('admin.food_detail', compact('food'));  
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'image' => 'image',
            'price' => 'required|integer',
        ]);

        $food = Food::findOrFail($id);

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('food', 'public');
            if(!$imagePath){
                return redirect()->back()->with('error', 'Gagal mengunggah gambar!');
            }
            $food->image = $imagePath;
        }

        $food->update($request->only(['name', 'price']));

        return redirect()->route('food')->with('success', 'Makanan berhasil diperbarui!');
    }   
    public function destroy($id){
        Food::destroy($id);
        return redirect()->back()->with('success', 'Makanan berhasil dihapus!');
    }
}
