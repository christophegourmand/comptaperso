<?php

namespace App\Models;

use Faker\Provider\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyComment extends Model
{
    use HasFactory;

    /*
    * Get the company that this comment concern and has been written for.
    */
    public function company() {
        return $this->belongsTo(Company::class);
    }
}
