<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
    protected $fillable = [
        'name',
        'target_amount',
        'current_amount',
        'deadline',
        'family_id' ,
    ];

    public function familys(){
        return $this->belongsTo(Family::class);
    }
}
