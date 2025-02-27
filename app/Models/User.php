<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'firstname',
        'family_id'
    ];

    public function familys(){
        return $this->belongsTo(Family::class);
    }
}
