<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    /*
    * Get the comments written for this company
    */
    public function comments(){
        return $this->hasMany(CompanyComments::class);
    }
}
