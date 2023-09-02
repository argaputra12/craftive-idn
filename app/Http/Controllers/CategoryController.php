<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function admin()
    {
        $categories = Category::paginate(10);

        return view('admin.categories.index',
            [
                'categories' => $categories
            ]
        );
    }
}
