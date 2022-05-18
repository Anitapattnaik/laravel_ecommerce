<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
class CategoryController extends Controller
{

    public function index()
    {
        $result['data'] = Category::all();

       return view('admin.category',$result);
    }

    public function manage_category()
    {
        return view('admin.manage_category');
    }

    public function manage_category_process(Request $request)
    {
       $request->validate([
        'category_name'=>'required',
        'category_slug'=>'required|unique:categories'
       ]);

       $model = new Category();
       $model->category_name = $request->post('category_name');
       $model->category_slug = $request->post('category_slug');
       $model->save();

       $request->session()->flash('message','category inserted.');
       return redirect('admin/category');
    }   
    
}
