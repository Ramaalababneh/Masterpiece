<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $data=User::all();
        return view('dashboard.pages.users.index',compact('data'));
    }

    public function create()
    {
        return view('dashboard.pages.users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            ]
        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            'mobileNum' => $request->mobileNum,
            'location' => $request->location,
            'image' => $filename,
        ]);

        return redirect('user')->with('flash_message', 'User Added!');
    }

    public function show(User $user)
    {
        //
    }

    public function edit($id)
    {
        $data=User::find($id);
        return view('dashboard.pages.users.edit')->with('data',$data);
    
    }

    public function update(UpdateUserRequest $request,$id)
    {
        $data['name']     = $request->name;
        $data['email']    = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['mobileNum']= $request->mobileNum;
        $data['location'] = $request->location;
        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }


        User::where(['id' => $id])->update($data);
        return redirect('user')->with('flash_message','user Update!');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        User::destroy($id);
        return redirect('user')->with('flash_message','User deleted!');
    }
}
