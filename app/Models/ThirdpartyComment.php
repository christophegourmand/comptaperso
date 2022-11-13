<?php

namespace App\Models;

use Faker\Provider\Thirdparty;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdpartyComment extends Model
{
    use HasFactory;

    /*
    * Get the thirdparty that this comment concern and has been written for.
    */
    public function thirdparty() {
        return $this->belongsTo(Thirdparty::class);
    }
}
