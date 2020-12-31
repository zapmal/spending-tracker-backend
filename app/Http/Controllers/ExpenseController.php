<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;

class ExpenseController extends Controller
{
    public function index()
    {
        return response()->json(Expense::all());
    }

    public function store()
    {
        Expense::create(request()->all());
        return response()->json([
            'name' => request()->name,
            'amount' => request()->amount
        ]);
    }

    public function destroy()
    {
        $toDeleteExpense = Expense::find(request()->id);

        $toDeleteExpense->delete();

        return response(200);
    }
}