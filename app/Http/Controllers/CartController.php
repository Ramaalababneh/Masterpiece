<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\OrderItem;
use App\Models\Payment;
namespace App\Http\Controllers;

// use App\Http\Controllers\CartController;

use App\Models\Cart;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\User;
// use Auth;
//use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $usercart = Cart::where('user_id',Auth::id())->with('item')->get();

        // if (Auth::id()) {
            $cartData = session()->get('cart', []);

            if(Auth::id())
            {
            $cart = Session::get('cart', []);
            $user = Auth::id();
            if (isset($cart)) {
                foreach ($cart as $item) {
                Cart::create(['user_id'=>$user,
                'item_id'=>$item['item_id'],
                'item_price'=>$item['price'],
                'image'=>$item['image'],
                'quantity'=>$item['quantity'],
                'total'=>$item['quantity'] * $item['price'],
                ]);
        }
        session()->forget('cart');
        $cartDB = Cart::where('user_id',Auth::id())->with('items')->get();
        return view('website.pages.cart.index',compact('cartDB'));
    }
        else
        {
        $cartDB = Cart::where('user_id',Auth::id())->with('items')->get();
        return view('website.pages.cart.index',compact('cartDB'));
        }
    }
    else{
        return view('website.pages.cart.index');

    }
        //     foreach ($cartData as $cartItem) {
        //         Cart::create([
        //             'user_id' => Auth::id(),
        //             'item_id' => $cartItem['item_id'],
        //             'quantity' => $cartItem['quantity'],
        //             'item_price' => $cartItem['item_price'],
        //             'total' => $cartItem['item_price'] * $cartItem['quantity']
        //         ]);
        //     }
        //     $cartcount = Cart::where('user_id', Auth::id())->count();
        //     session(['cartCount' => $cartcount]);

        //     session()->forget('cart');

        //     $cart = Cart::where('user_id', Auth::id())->first();

        //     // if ($cart) {
        //         return view('website.pages.cart.index', compact('usercart'))->with('reload', true);
        //     // } else {
        //         // return view('cart.cart', compact('usercart'));
        //     // }
        // } else
           // dd($cartData);
            

    }
    public function create(Request $request)
    {

        // $cart = Cart::where('user_id', Auth::id())->with('item')->get();
        // $totalPrice = $cart->sum('total');
        // $request->validate([
        //     'name' => 'required|string',
        //     'location' => 'required',
        //     'email' => 'required|email',
        //     'mobileNum	' => 'required',
        //     'regex:/^(079|078|077)\d{7}$/|max:10',
        // ]);
        // $payment = Payment::create([
        //     'method' => $request->payment,
        //     'user_id' => Auth::id(),
        // ]);

        //$order = Order::create([
            // 'name' => $request->name,
            // 'email' => $request->email,
            // 'address' => $request->address,
            // 'phone' => $request->phone,
            // 'total_amount' => $totalPrice,
            // 'payment_id' => $payment->id,
            // 'user_id' => Auth::id(),

    //     ]);
    //     foreach($cart as $item){
    //     OrderDetails::create([
    //         'order_id' => $order->id,
    //         'user_id' => Auth::id(),
    //         'item_id'=>$item->item_id,
    //         'item_price'=>$item->price,
    //         'quantity'=>$item->quantity,

    //     ]);
    // }
    // if (Auth::id()) {
    //     Cart::where('user_id', Auth::id())->delete();
    //     session()->forget('cartCount');
    //     return redirect('/thankyou');
    // }
    }
    public function destroyCart()
    {
    

    }
    public function store($id)
    {
        $item=Item::find($id);
        if(!Auth::id()){ 
        // Retrieve the existing cart from the session or create an empty cart if it doesn't exist
        $cart = Session::get('cart', []);

if (isset($cart[$id])) {
    // Item already exists in the cart, increase its quantity
    $cart[$id]['quantity']++;
} else {
    // Item doesn't exist in the cart, add it
    $cart[$id] = [
        'name' => $item->name,
        'quantity' => 1,
        'price' => $item->price,
        'image' => $item->image,
        'item_id' => $item->id
    ];
}

// Store the updated cart back in the session
Session::put('cart', $cart);

// Redirect back to the previous page
return redirect()->back();
        }
        else{
            $cart = Session::get('cart', []);
            $user = Auth::id();
            if (isset($cart[$id])) {
                foreach ($cart as $item) {
                Cart::create(['user_id'=>$user,
                'item_id'=>$item['item_id'],
                'item_price'=>$item['price'],
                'image'=>$item['image'],
                'quantity'=>$item['quantity'],
                'total'=>$item['quantity'] * $item['price'],
                ]);
        }
        session()->forget('cart');
    }
        return redirect()->back();
    }
        // $item = Item::findOrFail($id);
        // if (!Auth::id()) {
        //     $cart = session()->get('cart', []);
        //     if (isset($cart[$id])) {
        //         $cart[$id]['quantity']++;
        //     } else {
        //         $cart[$id] = [
        //             'name' => $item->name,
        //             'quantity' => 1,
        //             'price' => $item->price,
        //             "image" => $item->image,
        //             'item_id' => $item->id
        //         ];
        //     }
        //     session()->put('cart', $cart);

           // Alert::success('Product has been added to cart!')->autoClose();
        //     $currentUrl = request()->fullUrl();
        //     session(['current_url' => $currentUrl]);
        //     echo session('current_url');
        //     return redirect()->back();

        // } else {

        //     $cart = Cart::where('item_id', $id)->first();
        //     $cartData = session()->get('cart', []);
        //     if (!isset($cartData[$id])) {
        //         if (!$cart) {
        //             Cart::create([
        //                 'item_id' => $item->id,
        //                 'user_id' => Auth::id(),
        //                 'price' => $item->price,
        //                 'quantity' => 1,
        //                 'Totalprice' => $item->price
        //             ]);
        //            // Alert::success('Product has been added to cart!')->autoClose();
        //             session()->forget('cart');
        //             return redirect()->back();
        //         } else {
        //             $cart->increment('quantity');
        //             $newQuantity = $cart->quantity;
        //             $item_price = $item->price;
        //             $newTotalPrice = $item_price * $newQuantity;
        //             Cart::where(['item_id' => $id])->update(
        //                 ['Totalprice' => $newTotalPrice]
        //             );
        //            // Alert::success('Product has been added to cart!')->autoClose();
        //             session()->forget('cart');
        //             return redirect()->back();
        //         }

        //     }
        // }
        // return redirect()->back();
    }
    public function quantitycart($id, $type)
    {
        $cart = session()->get('cart', []);
        if ($type == 'plus') {
            if (!Auth::id()) {
                if (isset($cart[$id])) {
                    $cart[$id]['quantity']++;
                    session()->put('cart', $cart);
                    return redirect()->back();
                }
            } else {
                $cart = Cart::where('user_id', Auth::id())->where('id', $id)->first();
                $cart->increment('quantity');
                $newQuantity = $cart->quantity;
                $item_price = $cart->price;
                $newTotalPrice = $item_price * $newQuantity;
                Cart::where(['id' => $id])->where('user_id', Auth::id())->update(
                    ['Totalprice' => $newTotalPrice]
                );
                $cart->save();
                return redirect()->back();
            }
        }
        if ($type == 'minus') {
            if (!Auth::id()) {
                if (isset($cart[$id])) {
                    $cart[$id]['quantity']--;
                    session()->put('cart', $cart);
                    return redirect()->back();
                }
            } else {
                $cart = Cart::where('user_id', Auth::id())->where('id', $id)->first();
                $cartcount = Cart::where('user_id', Auth::id())->count();
                session(['cartCount' => $cartcount]);
                session()->forget('cart');
                $cart->decrement('quantity');
                $newQuantity = $cart->quantity;
                $item_price = $cart->price;
                $newTotalPrice = $item_price * $newQuantity;
                Cart::where(['id' => $id])->update(
                    ['Totalprice' => $newTotalPrice]
                );
                $cart->save();
                return redirect()->back();
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }


    public function Checkout()
    {
        if (Auth::id()) {
            $user = User::find(Auth::id());
            $cart = Cart::where('user_id', Auth::id())->with('item')->get();
            return view('cart.checkout', compact('user', 'cart'));
        } else {
            session()->put('checkout', 'check');
           // Alert::error('You must login first!')->autoClose()->footer('<a href="' . route("register") . '">Sign in here ?</a>');
            return redirect()->back();
        }

    }


    public function destroy($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back();
        }
        if (Auth::id()) {
            Cart::find($id)->delete();
            Cart::destroy($id);
            return redirect()->back();
        }
    }
} 