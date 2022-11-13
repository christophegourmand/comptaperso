<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thirdparty extends Model
{
    use HasFactory;

    /*
    * Get the comments written for this thirdparty
    */
    public function comments(){
        return $this->hasMany(ThirdpartyComment::class);
    }
}
