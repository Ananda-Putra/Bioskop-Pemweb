<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\Film;
use App\Models\Food;
use App\Models\Order;
use App\Models\OrderDrink;
use App\Models\OrderFood;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profil(){
        return view('user.profil');
    }
    public function index()
    {
        $film = Film::all();
        $food = Food::all();
        $drink = Drink::all();
        return view('user.dashboard', compact('film', 'food', 'drink'));
    }

    public function pesan($id)
    {
        $film = Film::findOrFail($id);
        return view('user.pesan', compact('film'));
    }

    public function order(Request $request, $film_id)
    {
        $request->validate([
            'title' => 'required|string',
            'amount' => 'required|integer|min:1',
            'payment_mehtod' => 'required|string',
            'image' => 'nullable|image'
        ]);

        $film = Film::findOrFail($film_id);

        $order = Order::create([
            'film_id' => $film_id,
            'image' => $film->image,
            'title' => $request->title,
            'amount' => $request->amount,
            'total_price' => Film::findOrFail($film_id)->price * $request->amount,
            'payment_mehtod' => $request->payment_mehtod,
        ]);


        return redirect()->route('dashboard')->with('success', 'Pemesanan berhasil!');
    }

    public function pesanFood($id)
    {
        $food = Food::findOrFail($id);
        return view('user.food.pesanFood', compact('food'));
    }
    public function orderFood(Request $request, $food_id)
    {
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|integer|min:1',
            'payment_mehtod' => 'required|string',
            'image' => 'nullable|image'
        ]);

        $film = Food::findOrFail($food_id);

        $order = OrderFood::create([
            'food_id' => $food_id,
            'image' => $film->image,
            'name' => $request->name,
            'amount' => $request->amount,
            'total_price' => Food::findOrFail($food_id)->price * $request->amount,
            'payment_mehtod' => $request->payment_mehtod,
        ]);


        return redirect()->route('dashboard')->with('success', 'Pemesanan berhasil!');
    }


    public function pesanDrink($id)
    {
        $drink = Drink::findOrFail($id);
        return view('user.drink.pesanDrink', compact('drink'));
    }
    public function orderDrink(Request $request, $drink_id)
    {
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|integer|min:1',
            'payment_mehtod' => 'required|string',
            'image' => 'nullable|image'
        ]);

        $film = Drink::findOrFail($drink_id);

        $order = OrderDrink::create([
            'drink_id' => $drink_id,
            'image' => $film->image,
            'name' => $request->name,
            'amount' => $request->amount,
            'total_price' => Drink::findOrFail($drink_id)->price * $request->amount,
            'payment_mehtod' => $request->payment_mehtod,
        ]);


        return redirect()->route('dashboard')->with('success', 'Pemesanan berhasil!');
    }
}
