<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function transactionItems() {
        return $this->hasMany(TransactionItem::class);
    }

    public static function beginPurchase(User $user) {
        // check if there's a pending cart (status 1)
        $transaction = $user->transactions()->where('status', 1)->first();
        if ($transaction) {
            return $transaction;
        }
        
        // create a new transaction
        $transaction = $user->transactions()->create([
            'status' => 1,
        ]);
    }

    public function addItemAmount($product_id, $amount) {
        $item = $this->transactionItems()->where('product_id', $product_id)->first();
        if ($item) {
            $item->amount += $amount;
            $item->save();
        } else {
            $this->transactionItems()->create([
                'product_id' => $product_id,
                'amount' => $amount,
            ]);
        }
    }

    public function removeItemAmount($product_id, $amount) {
        $item = $this->transactionItems()->where('product_id', $product_id)->first();
        if ($item) {
            $item->amount -= $amount;
            if ($item->amount <= 0) {
                $item->delete();
            } else {
                $item->save();
            }
        }
    }
}
