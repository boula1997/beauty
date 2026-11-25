<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Dashboard home: real store figures instead of the template demo content.
     */
    public function index()
    {
        $stats = [
            'orders' => Order::count(),
            'delivered_sales' => (float) Order::where('status', 'delivered')->sum('total'),
            'products' => Product::count(),
            'users' => User::count(),
            'messages' => Message::count(),
        ];

        $latestOrders = Order::latest()->take(5)->get(['id', 'name', 'phone', 'total', 'status', 'created_at']);

        return view('dashboard', compact('stats', 'latestOrders'));
    }
}
