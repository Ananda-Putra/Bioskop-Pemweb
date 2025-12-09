<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Menu;
use App\Models\OrderDrink;
use App\Models\OrderFood;   
use Barryvdh\DomPDF\Facade\Pdf;

class HistoryController extends Controller
{
    public function index()
    {
        $orders = Order::with('film')->get();
        $foodOrders = OrderFood::with('food')->get();
        $drinkOrders = OrderDrink::with('drink')->get();
        return view('user.history', compact('orders', 'foodOrders', 'drinkOrders'));
    }


public function downloadPdf()
{
    $orders = Order::with('film')->get();
    $foodOrders = OrderFood::with('food')->get();
    $drinkOrders = OrderDrink::with('drink')->get();

    $pdf = Pdf::loadView('pdf.pdf', compact('orders', 'foodOrders', 'drinkOrders'))
        ->setPaper('A4', 'portrait');

    return $pdf->download('riwayat-pesanan.pdf');
}


}

