<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Order;

class ShopController extends Controller
{
    public function show(){
        return view('shop');
    }
    
    public function realization() {
        return view('orderRealization');
    }
    
    public function store(Request $request) {
        if (\Auth::user() == null) {
            return view('welcome');
        }
        $order = new Order();
        $order->user_id = \Auth::user()->id;
        $order->status = 'W trakcie realizacji';
        if ($order->save()) {
            return view('welcome');
        }
    }
    
    public function orders(){
        $orders = Order::with('user')->where('user_id', \Auth::user()->id)->get();
        return view('orders',['orders' => $orders]);
    }
}
