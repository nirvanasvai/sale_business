<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PublishController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function publish()
    {
        $categories = Category::all();
        return view('pages.publish.publish', compact('categories'));
    }

}
