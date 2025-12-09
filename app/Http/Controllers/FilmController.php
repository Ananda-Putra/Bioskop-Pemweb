<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $film = Film::all();
        return view('admin.film', compact('film'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'price' => 'required|integer',
        ]);


        $imagePath = $request->file('image')->store('films', 'public');

        if(!$imagePath){
            return redirect()->back()->with('error', 'Gagal mengunggah gambar!');
        }

        $data = Film::create([
            'title' => $request->title,
            'image' => $imagePath,
            'price' => $request->price,
        ]);

        // dd($data);

        return redirect()->back()->with('success', 'Film berhasil ditambahkan!');
    }

    public function show($id){
        $film = Film::findOrFail($id);

        return view('admin.film_detail', compact('film'));  
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'image' => 'image',
            'price' => 'required|integer',
        ]);

        $film = Film::findOrFail($id);

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('films', 'public');
            if(!$imagePath){
                return redirect()->back()->with('error', 'Gagal mengunggah gambar!');
            }
            $film->image = $imagePath;
        }

        $film->title = $request->title;
        $film->price = $request->price;
        $film->save();

        return redirect()->route('film')->with('success', 'Film berhasil diperbarui!');
    }

    public function destroy($id){
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect()->back()->with('success', 'Film berhasil dihapus!');
    }
}
