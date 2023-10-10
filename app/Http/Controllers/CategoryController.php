<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $data= Category::all();
        return view('dashboard.pages.category.index')->with('data', $data);
    
    }

    public function create()
    {
        return view('dashboard.pages.category.create');
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

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $filename,
        ]);

        return redirect('category')->with('flash_message', 'Category Added!');
        }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=Category::find($id);
        return view('dashboard.pages.category.edit')->with('data',$data);
    
    }

    public function update(Request $request, $id)
    {
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        $filename = '';

        if ($request->hasFile('image')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img/' . time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);
            $data['image'] = $filename;
        } else {
            unset($data['image']);
        }


        Category::where(['id' => $id])->update($data);
        return redirect('category')->with('flash_message','Category Update!');

    }

    public function destroy($id)
    {
        
    Category::destroy($id);
    return redirect('category')->with('flash_message','Category deleted!');

    }
}
