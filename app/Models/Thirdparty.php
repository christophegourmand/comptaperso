<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Thirdparty extends Model
{
    use HasFactory;

    /*
    * Get the comments written for this thirdparty
    */
    public function comments(){
        return $this->hasMany(ThirdpartyComment::class);
    }

    public function operations()
    {
        $this->hasMany(Operation::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }




}
