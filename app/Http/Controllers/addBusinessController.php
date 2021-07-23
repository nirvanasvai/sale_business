<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addBusinessController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function publish()
    {
        return view('pages.publish.publish');
    }

}
