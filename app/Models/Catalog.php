<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Catalog extends Model
{
    use HasFactory;

    private $price;

    public $table = 'catalog';

    protected $fillable = [
        'title',
        'user_id',
        'slug',
        'price',
        'status_1',
        'status_2',
        'status_3',
        'body',
        'view_count',
        'archive',
        'is_approved',
        'city_id',
        'image',
        'category_id'
    ];

    public static function boot()
    {
        parent::boot();

        self::created(function ($model) {

            $model->slug = Str::slug(mb_substr($model->title, 0, 40) . '-' . $model->id);
            $model->save();
        });
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function metas()
    {
        return $this->hasMany(Catalog_meta::class)->select(['option', 'value']);
    }

    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function addCatalog($request)
    {
        $ar = [
            'title' => $request->get('name'),
            'body' => $request->get('article'),

        ];

        return Catalog::create($ar);
    }

    public function favorite()
    {
        return $this->hasOne(Favorite::class, 'catalog_id', 'id')->where('user_id', auth()->user()->id);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'catalog_id', 'id')->where('user_id', auth()->user()->id);
    }


    public function images()
    {
        return $this->hasOne(Image::class, 'post_id', 'id');
    }

    public function imagesPreview()
    {
        return $this->hasMany(Image::class, 'post_id', 'id');
    }

    public function getCatalog()
    {
        return $this->hasOne(Catalog_meta::class, 'catalog_id', 'id');
    }

    public function CategoryCatalogRelationShips()
    {
        return $this->hasMany(Category_Catalog::class, 'catalog_id', 'id');
    }

    public function CategoryRelationships()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCategory()
    {
        return $this->belongsToMany(Category::class, 'category_catalog');
    }

}
