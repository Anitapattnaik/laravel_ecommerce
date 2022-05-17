<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
class CategoryController extends Controller
{

    public function index()
    {
       return view('admin.category');
    }

    public function manage_category()
    {
        return view('admin.manage_category');
    }
}
