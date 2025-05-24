<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $income = Category::where('type', 'income')
            ->withSum('transaction as total_amount', 'amount')
            ->get()
            ->sum('total_amount');

        $expense = Category::where('type', 'expense')
            ->withSum('transaction as total_amount', 'amount')
            ->get()
            ->sum('total_amount');

        $saldo = $income - $expense;

        return view('dashboard', compact('income', 'expense', 'saldo'));

    }
}
