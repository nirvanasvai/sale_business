<?php

namespace App\Http\Livewire;

use App\Models\Favorite;
use Livewire\Component;

class FavoriteInCabinet extends Component
{
    public $add,$delete;
    public $favorite;
    public function render()
    {
        return view('livewire.favorite-in-cabinet');
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
