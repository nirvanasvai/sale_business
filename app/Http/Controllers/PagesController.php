<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\City;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @param string $city
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $catalog = Catalog::find(20);

        return view('pages.static.home',compact('catalog'));
    }
}
