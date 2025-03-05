<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goals extends Model
{
    protected $fillable = [
        'title',
        'priority',
        'family_id',
    ];

    public function familys(){
        return $this->belongsTo(Family::class);
    }
}
