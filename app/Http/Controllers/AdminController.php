<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        $data= Admin::all();
        return view('dashboard.pages.admins.index')->with('data', $data);
    }

    public function create()
    {
        
        return view('dashboard.pages.admins.create');

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

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            'image' => $filename,
        ]);

        return redirect('admin')->with('flash_message', 'Admin Added!');
    }

    public function show(Admin $admin)
    {
        //
    }

    public function edit($id)
    {
        
        $data=Admin::find($id);
        return view('dashboard.pages.admins.edit')->with('data',$data);
    
    }

    public function update(UpdateAdminRequest $request, $id)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }


        Admin::where(['id' => $id])->update($data);
        return redirect('admin')->with('flash_message','admin Update!');
    }

    public function destroy($id)
    {
        
        Admin::find($id)->delete();
        Admin::destroy($id);
        return redirect('admin')->with('flash_message','Admindeleted!');

    }
}
