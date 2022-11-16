<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = ['brand', 'model', 'year', 'max_speed', 'is_automatic', 'engine', 'number_of_doors'];

    public function scopeSearchByBrand ($query, $brand){
        return $query->when($brand, function ($query, $brand) {
            $query->where('brand', $brand);
            });
    }

    public function scopeSearchByModel ($query, $model) {
        return $query->when($model, function ($query, $model) {
            $query->where('model', $model);
        });
    }
}
