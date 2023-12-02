<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Cart;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        if (!session()->has('cartPageReloaded') && session()->has('checkout')) {
            session(['cartPageReloaded' => true]);
            return redirect()->route('cart');
        }
        else{
            return redirect()->intended(RouteServiceProvider::HOME);
        }
        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    protected function authenticated(Request $request, $user)
{
    $cartItems = session()->get('cart', []);

    if (!empty($cartItems)) {
        foreach ($cartItems as $item_id) {
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->item_id = $item_id;
            // Set other cart properties as needed
            $cart->save();
        }

        // Clear the session cart
        session()->forget('cart');
    }

    return redirect()->intended($this->redirectPath());
}

}
