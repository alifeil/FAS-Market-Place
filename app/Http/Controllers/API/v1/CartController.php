<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // public function store(Request $request)
    // {
    //     $userId = $request->user()->id;

    //     $cart = Cart::where('user_id', $userId)
    //             ->where('product_id', $request->product_id)->get();
    //     if(count($cart)>0){
    //         $quantity = $cart->quantity;
    //         $newQuantity = $quantity + ($request->quantity);
    //         Cart :: where('user_id', $userId)
    //         ->where('product_id', $request->product_id)
    //         ->update(['quantity'=>$newQuantity]);
    //     }else{
    //         $detail = new Cart;
    //         $detail->product_id = $request->product_id;
    //         $detail->price = $request->price;
    //         $detail->quantity = $request -> quantity;
    //         $detail->user_id = $userId;
    //         $detail->save();
    //     }
    //     return response(['success' => true]);
    // }
    // percobaan
    // function addToCart(Request $request)
    // {
    //     if($request->session()->has('user'))
    //     {
    //         $cart = new Cart;
    //         $cart->user_id=$request->session()->get('user')['id'];
    //         $cart->product_id=$request->product_id;
    //         $cart->save();
    //         return redirect('/');
    //     }
    //     else
    //     {
    //         return redirect('/login');
    //     }

    // }
    // function cartItem()
    // {
    //     $userId=Session::get('user')['id'];
    //     return Cart::where('user_id',$userId)->count();
    // }


    public function store(Request $request)
    {
        $userId = $request->user()->id;
        $cart = Cart::where('user_id', $userId)
                ->where('product_id', $request->product_id)->first();
        // jika ada data yang sama
        if($cart != null){
            //Akan menambahkan quantity
            $quantity = $cart->quantity;
            $newQuantity = $quantity + ($request->quantity);
            Cart::where('user_id', $userId)
                ->where('product_id', $request->product_id)
                ->update(['quantity'=> $newQuantity]);
        }else{
            //Akan menambahkan record baru
            $detail =new Cart;
            $detail->product_id = $request->product_id;
            $detail->price = $request->price;
            $detail->quantity = $request->quantity;
            $detail->user_id = $userId;
            $detail->save();
        }
        return response(['success' => true]);
    }
    public function showByUser(Request $request)
    {
         $userId = $request->user()->id;

         $carts = Cart::where('user_id', $userId)
         ->with('user')
         ->with('product')
         ->with('product.category')
         ->get();
         return response(['data' => $carts]);

    }

}
