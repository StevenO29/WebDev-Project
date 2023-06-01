<?php

namespace App\Http\Controllers;

use App\Models\TransactionItem;
use Illuminate\Http\Request;

class TransactionItemController extends Controller
{
    public function index()
    {
        // Get all transaction items.
        return view('transaction_items.index', [
            'transaction_items' => TransactionItem::all()
        ]);
    }

    public function create()
    {
        // Show the form for creating a new transaction item.
        return view('transaction_items.create');
    }

    public function store(Request $request)
    {
        // Create a new transaction item.
        $transactionItem = new TransactionItem([
            'product_id' => $request->input('product_id'),
            'amount' => $request->input('amount'),
        ]);

        $transactionItem->save();

        // Redirect to the transaction item index.
        return redirect()->route('transaction_items.index');
    }

    public function show(TransactionItem $transactionItem)
    {
        // Show the details of a transaction item.
        return view('transaction_items.show', [
            'transaction_item' => $transactionItem
        ]);
    }

    public function edit(TransactionItem $transactionItem)
    {
        // Show the form for editing a transaction item.
        return view('transaction_items.edit', [
            'transaction_item' => $transactionItem
        ]);
    }

    public function update(Request $request, TransactionItem $transactionItem)
    {
        // Update a transaction item.
        $transactionItem->update([
            'product_id' => $request->input('product_id'),
            'amount' => $request->input('amount'),
        ]);

        // Redirect to the transaction item index.
        return redirect()->route('transaction_items.index');
    }

    public function destroy(TransactionItem $transactionItem)
    {
        // Delete a transaction item.
        $transactionItem->delete();

        // Redirect to the transaction item index.
        return redirect()->route('transaction_items.index');
    }
}
