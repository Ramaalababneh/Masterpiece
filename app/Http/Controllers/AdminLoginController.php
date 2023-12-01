<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use DB;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function adminLogin()
    {
        return view('dashboard.pages.adminLogin.adminLogin');
    }


    public function adminLoginPost(Request $request)
    {
        $credetails = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        $admin = DB::table('admins')
            ->where('email', $credetails['email'])
            ->first();
            if ($admin) {

                if (Hash::check($credetails['password'], $admin->password)) {
                    session()->put('loginname', $admin->name);
                    $name = session('loginname');

                return redirect()->route('homeAdmin')->with('success', 'Login Successfully');
            } else {
                    return back()->with('error', 'Email or Password is invalid');
                }
            } else {
                return back()->with('error', 'Email or Password is invalid');
            }
    }

    public function adminLogout()
    {

        if (session()->has('loginname')) {
            session()->pull('loginname');
            return redirect('adminLogin');
        }
    }

    public function adminHome()
    {
        return view('dashboard.pages.home.index');


    }
}

