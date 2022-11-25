<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = ['brand', 'model', 'year', 'max_speed', 'is_automatic', 'engine', 'number_of_doors'];

    public function scopeSearchByBrand ($query, $term){
        return $query->when($term, function ($query, $term) {
            $query->orWhere('brand', 'LIKE', '%'.$term.'%');
            });
    }

    public function scopeSearchByModel ($query, $term) {
        return $query->when($term, function ($query, $term) {
            $query->orWhere('model', 'LIKE', '%'.$term.'%');
        });
    }
}
