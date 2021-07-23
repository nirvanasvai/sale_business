<?php

namespace App\Http\Livewire;

use App\Models\Catalog;
use App\Models\Catalog_meta;
use App\Models\Category;
use App\Models\City;
use App\Models\Favorite;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Symfony\Component\Console\Input\Input;

class CatalogPages extends Component
{
    use WithPagination;
    protected $catalogs;
    public $category_filter;
    public $city_filter;
    public $new_catalogs,$min_price,$max_price;
    public $min;
    public $max;
    public $price;

    public $add,$delete;
    public $check;



    public function mount()
    {
        $this->category_filter = [];
        $this->city_filter = [];
    }

    public function render()
    {

        $cities = City::query()->get();
        $categories = Category::query()
            ->orderby('name', 'ASC')
            ->get();

    //Каталог;
        $catalogs = Catalog::query();
        if ($this->new_catalogs) {
            $catalogs->orderBy('id', 'desc');
        }
        if($this->min_price){
            $catalogs->orderBy('price','DESC');
        }
        if ($this->max_price){
            $catalogs->orderBy('price','ASC');
        }
        if ($this->category_filter) {
            $catalogs->orWhereHas('getCategory', function ($query) {
                $query->where('category_id', $this->category_filter);
            });
        }
        if( !empty($this->min) && !empty($this->max)){
            $catalogs->whereBetween('price', [(int)$this->min, (int)$this->max]);
        }elseif (!empty($this->min)){
            $catalogs->whereBetween('price', [(int)$this->min, 100000000000]);
        }elseif (!empty($this->max)){
            $catalogs->whereBetween('price', [0, (int)$this->max]);
        }
//        if (!empty($this->min)){
//            $catalogs->where('price', '>=',$this->min);
//        }
//        if (!empty($this->max)){
//            $catalogs->where('price', '<=',$this->max);
//        }

        $catalogs->when($this->city_filter, function ($query) {
            $query->where('city_id', $this->city_filter);
        });
//    $catalogs = $catalogs->with('favorites');
    $catalogs = $catalogs->paginate(10);
        $this->catalogs = $catalogs;

        return view('livewire.catalog-pages', compact('categories','cities'),
        [
            'catalog'=>Catalog::query()->first(),
            'catalogs'=>$catalogs,
            'favorite'=>User::query()->get()
        ]);
    }


    public function updatedAdd()
    {
        Favorite::query()->updateOrCreate([
            'user_id'=>auth()->user()->id,
            'catalog_id'=>$this->add,
        ]);
    }

    public function updatedDelete()
    {
       $delete = Favorite::query()->where('catalog_id',$this->delete)->where('user_id',auth()->user()->id)->first();
       $delete->delete();
    }

}
