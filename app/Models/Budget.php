<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    public function budgetAutomation(){

    }

    public function transations(){
        return $this->hasMany(Transaction::class);
    }

}
