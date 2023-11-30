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
use Srmklive\PayPal\Services\PayPal as PayPalClient;

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

    public function index()
    {
        $cartData = session()->get('cart', []);

        if (Auth::id()) {
            $cart = Session::get('cart', []);
            $user = Auth::id();
            if (isset($cart)) {
                foreach ($cart as $item) {
                    Cart::create([
                        'user_id' => $user,
                        'item_id' => $item['item_id'],
                        'item_price' => $item['price'],
                        'image' => $item['image'],
                        'quantity' => $item['quantity'],
                        'total' => $item['quantity'] * $item['price'],
                    ]);
                }
                session()->forget('cart');
                $cartDB = Cart::where('user_id', Auth::id())->with('items')->get();
                return view('website.pages.cart.index', compact('cartDB'));
            } else {
                $cartDB = Cart::where('user_id', Auth::id())->with('items')->get();
                return view('website.pages.cart.index', compact('cartDB'));
            }
        } else {
            return view('website.pages.cart.index');

        }
    }
    public function create(Request $request)
    {

        $cart = Cart::where('user_id', Auth::id())->with('items')->get();
        $totalPrice = $cart->sum('total');

        $request->validate([
            'name' => 'required|string',
            'location' => 'required',
            'email' => 'required|email',
            'mobileNum' => 'required',
        ]);
        if ($request->payment == 'cash') {
            $payment = Payment::create([
                'method' => $request->payment,
                'user_id' => Auth::id(),
            ]);


            $order = Order::create([
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->location,
                'phone' => $request->mobileNum,
                'total_amount' => $totalPrice,
                'payment_id' => $payment->id,
                'user_id' => Auth::id(),
            ]);
            foreach ($cart as $item) {
                OrderDetails::create([
                    'order_id' => $order->id,
                    'user_id' => Auth::id(),
                    'item_id' => $item->item_id,
                    'price' => $item->item_price,
                    'quantity' => $item->quantity,

                ]);

            }

            if (Auth::id()) {
                Cart::where('user_id', Auth::id())->delete();
                session()->forget('cartCount');
                return redirect('/thankyou');
            }
        }
        else {
            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();
            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                        "return_url" => route('paypal_success'),
                        "cancel_url" => route('paypal_cancel')
                    ],
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => 7
                        ]
                    ]
                ]
            ]);


            $paymentRequest = [
                'name' => $request->name,
                'email' => $request->email,
                'location' => $request->location,
                'mobileNum' => $request->mobileNum,
                'payment' =>  $request->payment,      
            ];
            session(['paymentRequest' => $paymentRequest]);
            return redirect()->route('stripe');

        }
    }
    public function destroyCart()
    {


    }

    public function store($id)
    {
        $item = Item::find($id);
        if (!Auth::id()) {
            $cart = Session::get('cart', []);

            if (isset($cart[$id])) {
                // Item already exists in the cart, increase its quantity
                $cart[$id]['quantity']++;
            } else {

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
        } else if (Auth::id()) {
            $cart = Session::get('cart', []);
            if ($cart) {
                $user = Auth::id();
                if (isset($cart[$id])) {
                    foreach ($cart as $item) {
                        Cart::create([
                            'user_id' => $user,
                            'item_id' => $item['item_id'],
                            'item_price' => $item['price'],
                            'image' => $item['image'],
                            'quantity' => $item['quantity'],
                            'total' => $item['quantity'] * $item['price'],
                        ]);
                    }
                    session()->forget('cart');
                }

            } else {
                $item = Item::find($id);
                $cart = Cart::where('item_id', $id)->first();
                if (!$cart) {
                    Cart::create([
                        'user_id' => Auth::id(),
                        'item_id' => $id,
                        'item_price' => $item->price, // Use -> to access object properties
                        'image' => $item->image, // Use -> to access object properties
                        'quantity' => 1, // Use -> to access object properties
                        'total' => $item->price, // Use -> to access object properties
                    ]);
                } else {
                    $cart->update([
                        'quantity' => $cart->quantity + 1,
                        'total' => $cart->quantity * $item->price
                    ]);
                }

            }
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
        return redirect()->back();
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
                    ['total' => $newTotalPrice]
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
                    ['total' => $newTotalPrice]
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
            $cart = Cart::where('user_id', Auth::id())->with('items')->get();

            return view('website.pages.cart.checkout', compact('user', 'cart'));
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