<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\Category_Catalog;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function catalog()
    {
        return view('pages.catalog.catalog');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function object($city, $slug)
    {

        $city = City::where('slug', $city)->first();
        $object = Catalog::where('slug', $slug)->first();
        $catalogs = Catalog::where('slug', $slug)->get();
        $category = Category::query()->whereHas('getCatalogLikes',function ($q) use($object,$city){
            $q->where('catalog_id',$object->id);
//            $q->with('city',$city->id);
        })
//            ->whereHas('city',function ($q) use($city){
//            $q->where('id',$city->id);
//        })
            ->first();

        return view('pages.catalog.object', compact('object','category','catalogs'));
    }

}


