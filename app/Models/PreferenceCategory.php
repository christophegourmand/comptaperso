<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferenceCategory extends Model
{
    use HasFactory;

    /**
    * Get the preferences who are in this category.
    */
    public function preferences()
    {
        return $this->hasMany(Preference::class);
    }

}
