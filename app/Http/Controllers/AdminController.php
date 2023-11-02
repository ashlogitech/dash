<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming 'User' is your User model
use App\Models\Order; // Assuming 'Order' is your Order model

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalOrders = Order::count();

        return view('admin.dashboard', compact('totalUsers', 'totalOrders'));
    }
}
