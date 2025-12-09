<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index()
    {
        $drink = Drink::all();
        return view('admin.drink', compact('drink'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'price' => 'required|integer',
        ]);



        $imagePath = $request->file('image')->store('drinks', 'public');

        if (!$imagePath) {
            return redirect()->back()->with('error', 'Gagal mengunggah gambar!');
        }

        $data = Drink::create([
            'name' => $request->name,
            'image' => $imagePath,
            'price' => $request->price,
        ]);

        return redirect()->back()->with('success', 'Minuman berhasil ditambahkan!');
    }

    public function show($id)
    {
        $drink = Drink::findOrFail($id);
        return view('admin.drink_detail', compact('drink'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image',
            'price' => 'required|integer',
        ]);
        // dd($request->all());

        $drink = Drink::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('drink', 'public');
            if (!$imagePath) {
                return redirect()->back()->with('error', 'Gagal mengunggah gambar!');
            }
            $drink->image = $imagePath;
        }

        $drink->update($request->only(['name', 'price']));

        return redirect()->route('drink')->with('success', 'Minuman berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Drink::destroy($id);
        return redirect()->back()->with('success', 'Minuman berhasil dihapus!');
    }
}
