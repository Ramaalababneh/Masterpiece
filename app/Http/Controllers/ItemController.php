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
            'category_id' => $request->category_id,

        ]);

        return redirect('item')->with('flash_message', 'Item Added!');
        }

        // show single itme in the webiste 
public function show($id,$category_id)
{
    $item = Item::where('id', $id)->first();
    $relatedItems = Item::where('category_id', $category_id)
                    ->where('id', '!=', $id) // Exclude the current item
                    ->limit(5) // You can limit the number of related items to display
                    ->get();
                //    dd($relatedItems);
    if ($item) {
        return view('website.pages.singleItem.index', compact('item','relatedItems'));
    } else {
        // Handle the case where no item is found for the given category_id.
        return view('website.pages.singleItem.index')->with('error', 'Item not found');
    }
}

// public function show($id)
// {
//     $item = Item::where('id', $id)->first();
//   $relatedItems = Item::where('category_id', $item-> category_id)
//                     ->where('id', '!=', $id) // Exclude the current item
//                     ->limit(5) // You can limit the number of related items to display
//                     ->get();
//                 //    dd($relatedItems);
//     if ($item) {
//         return view('website.pages.singleItem.index', compact('item','relatedItems'));
//     } else {
//         // Handle the case where no item is found for the given category_id.
//         return view('website.pages.singleItem.index')->with('error', 'Item not found');
//     }
// }


public function showRelatedItems($itemId) {
    // Retrieve the single item
    $data = Item::find($itemId);

    if (!$data) {
        // Handle the case where the item doesn't exist
    }

    // Get the category ID of the single item
    $categoryId = $data->category_id;

    // Retrieve related items from the same category
    $relatedItems = Item::where('category_id', $categoryId)
                    ->where('id', '!=', $itemId) // Exclude the current item
                    ->limit(5) // You can limit the number of related items to display
                    ->get();
dd($relatedItems);
   // return view('items.showRelatedItems', compact('data', 'relatedItems'));
return view('website.pages.singleItem.index', compact('data', 'relatedItems'));
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
        $data['category_id'] = $request->category_id;

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
