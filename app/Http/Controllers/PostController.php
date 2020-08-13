<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PostController extends Controller
{
    public function getPostDetail(Category $category)
    {
      // $category = Category::find($id);
      echo $category;
    }
}
