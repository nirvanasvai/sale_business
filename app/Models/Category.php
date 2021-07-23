<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'category_id'
    ];
    public function getCatalogLikes()
    {
        return $this->hasManyThrough(Catalog::class,Category_Catalog::class,'category_id','id','id');
    }



//    public function category()
//    {
//        return $this->belongsTo('App\Shop\Manufacturer\Category', 'category_id')
//            ->withTranslation();
//    }


    public function getCatalog()
    {
        return $this->belongsToMany(Catalog::class, 'category_catalog', 'category_id');
    }

    public function itemCatalog()
    {
        return $this->hasMany(Catalog::class, 'category_id');
    }

    public function parentFilter()
    {
        return $this->hasMany(Category::class, 'id', 'category_id');
    }

    public function image()
    {
        return $this->morphMany(Image::class, 'posts');
    }
}
