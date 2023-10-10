<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Discount;
use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;

class DiscountController extends Controller
{
    public function index()
    {
        $data= Discount::all();
        return view('dashboard.pages.discounts.index')->with('data', $data);
    
    }

    public function create()
    {
        return view('dashboard.pages.discounts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'discount_name' => 'required',
            'value' => 'required',
            'status' => 'required',
        ]);


        Discount::create([
            'discount_name' => $request->discount_name,
            'value' => $request->value,
            'status' => $request->status,
        ]);

        return redirect('discount')->with('flash_message', 'discount Added!');
        }

    public function show(Discount $discount)
    {
        //
    }

    public function edit($id)
    {
         $data=Discount::find($id);
        return view('dashboard.pages.discounts.edit')->with('data',$data);
    
    }

    public function update(Request $request, $id)
    {
        $data['discount_name'] = $request->discount_name;
        $data['value'] = $request->value;
        $data['status'] = $request->status;

        Discount::where(['id' => $id])->update($data);
        return redirect('discount')->with('flash_message','Discount Update!');

    }


    public function destroy($id)
    {
            
    Discount::destroy($id);
    return redirect('discount')->with('flash_message','Discount deleted!');

    }
}
