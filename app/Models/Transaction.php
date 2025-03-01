<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'amount', 
        'description', 
        'type',
        'category_id',
        'family_id'
    ];

    public function familys(){
        return $this->belongsTo(Family::class);
    }

    // public function categories(){
    //     return $this->hasMany(Categories::class);
    // }
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function budgets(){
        return $this->belongsTo(Budget::class);
    }
}
