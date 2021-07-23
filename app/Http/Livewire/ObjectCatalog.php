<?php

namespace App\Http\Livewire;

use App\Models\Catalog;
use Livewire\Component;

class ObjectCatalog extends Component
{
    public $show_phone = false;
    public $object;
    public $category= [];
    public $catalogs,$item;

    public function phoneShow()
    {
        $this->show_phone = !$this->show_phone;
    }

    public function render()
    {
        return view('livewire.object-catalog');
    }
}
