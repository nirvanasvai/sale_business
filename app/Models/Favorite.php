<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'catalog_id'];


    public function favorites()
    {
        return $this->hasMany(Catalog::class, 'id', 'catalog_id')
            ->where('user_id', auth()->user()->id);
    }


}
