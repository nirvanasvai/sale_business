<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Catalog extends Model
{
    use HasFactory;
    public $table= 'category_catalog';

    protected $fillable = ['category_id','catalog_id'];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'catalog_id');
    }
    public function CategoryRelationships()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
