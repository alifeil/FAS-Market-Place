<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Cart;

use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // public function store(Request $request)
    // {
    //     $userId = $request -> user()->id;

    //     $carts = Cart::where('user_id', $userId)->get();

    //     if (count($carts) !=0)
    //     {
    //         $transaction = new Transaction();
    //         $transaction->datetime = Carbon::now();
    //         $transaction->user_id = $request ->user_id;
    //         $transaction->payment_status = $request->payment_status;

    //     }

    public function store (Request $request)
    {
        // $userId = User::find($request->input('user_id'));
        $userId = $request ->user()->id;
        $carts = Cart::where('user_id', $userId)->get();
        if(count($carts) !=0)
        {
        $transaction = new Transaction();
        $transaction->dateTime = Carbon::now();
        $transaction->user_id = $userId;
        $transaction->save();

        $totalCost = 0;
        foreach($carts as $cart)
        {
            $totalCost += (($cart->quantity)*($cart->price));
            $transaction->products()
            ->attach($cart->product_id,
            ['quantity'=>$cart->quantity,'price'=>$cart->price]);
        }
        $transaction = Transaction::where('id', $transaction->id);
            $transaction->update(['total_cost'=>$totalCost]);
            //delete cart
            Cart::where('user_id', $userId)->delete();
            return response(['success' => true]);
        }else{
            return response(['success' => false,
             'message' => 'The carts is empty']);
        }
    }
    }

