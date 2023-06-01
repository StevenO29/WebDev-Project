<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // Get all transactions for the authenticated user.
        return view('transactions.index', [
            'transactions' => Transaction::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        // Show the form for creating a new transaction.
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        // Create a new transaction.
        $transaction = Transaction::create([
            'user_id' => auth()->user()->id,
            'amount' => $request->input('amount'),
            'description' => $request->input('description')
        ]);

        // Redirect to the transactions index.
        return redirect()->route('transactions.index');
    }

    public function show(Transaction $transaction)
    {
        // Show the details of a transaction.
        return view('transactions.show', [
            'transaction' => $transaction
        ]);
    }

    public function edit(Transaction $transaction)
    {
        // Show the form for editing a transaction.
        return view('transactions.edit', [
            'transaction' => $transaction
        ]);
    }

    public function update(Request $request, Transaction $transaction)
    {
        // Update a transaction.
        $transaction->update([
            'amount' => $request->input('amount'),
            'description' => $request->input('description')
        ]);

        // Redirect to the transactions index.
        return redirect()->route('transactions.index');
    }

    public function destroy(Transaction $transaction)
    {
        // Delete a transaction.
        $transaction->delete();

        // Redirect to the transactions index.
        return redirect()->route('transactions.index');
    }
}
