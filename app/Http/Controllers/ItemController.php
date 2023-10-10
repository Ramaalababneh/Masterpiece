<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    public function index()
    {
        $data= Item::all();
        return view('dashboard.pages.items.index')->with('data', $data);
    
    }

    public function create()
    {
        return view('dashboard.pages.items.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        Item::create([
            'name' => $request->name,
            'image' => $filename,
            'description' => $request->description,
            'price' => $request->price,
            'stock_quantity' => $request->stock_quantity,
            'size' => $request->size,
        ]);

        return redirect('items')->with('flash_message', 'Item Added!');
        }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=Item::find($id);
        return view('dashboard.pages.items.edit')->with('data',$data);
    
    }

    public function update(Request $request,$id)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['price'] = $request->price;
        $data['stock_quantity'] = $request->stock_quantity;
        $data['size'] = $request->size;

        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }


        Item::where(['id' => $id])->update($data);
        return redirect('item')->with('flash_message','Item Update!');

    }

    public function destroy($id)
    {
        Item::destroy($id);
        return redirect('item')->with('flash_message','Category deleted!');

    }
}
