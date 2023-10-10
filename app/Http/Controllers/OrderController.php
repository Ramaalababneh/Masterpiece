<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data= Order::all();
        return view('dashboard.pages.orders.index')->with('data', $data);
    
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_date' => 'required',
            'total_amount' => 'required',
            ]);

        Order::create([
            'order_date' => $request->order_date,
            'total_amount' => $request->total_amount,
            // 'user_id' => $request->user_id,
        ]);

        return redirect('order')->with('flash_message', 'order Added!');
        }

    public function show(Order $order)
    {
        //
    }

    public function edit($id)
    {
        
        $data=Order::find($id);
        return view('dashboard.pages.orders.edit')->with('data',$data);
    
    }

    public function update(Request $request, $id)
    {
        $data['order_date'] = $request->order_date;
        $data['total_amount'] = $request->total_amount;
        // $data['user_id'] = $request->user_id;

        Order::where(['id' => $id])->update($data);
        return redirect('order')->with('flash_message','Item Update!');

    }

    public function destroy($id)
    {
        Order::destroy($id);
        return redirect('order')->with('flash_message','Order deleted!');

    }
}
