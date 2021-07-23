<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog_meta extends Model
{
    use HasFactory;

    public $table = 'catalog_meta';
    public $timestamps = false;
    protected $fillable = ['option', 'value', 'catalog_id'];


    public function metas()
    {
        return $this->hasMany(Catalog_meta::class)->select(['option', 'value']);
    }

//    public function getCatalog()
//    {
//        return $this->hasMany(Catalog::class, 'id', 'catalog_id');
//    }
}
