<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;

    /**
    * Get the bank-accounts using that account-type.
    */
    public function category()
    {
        return $this->belongsTo(PreferenceCategory::class);
    }

    /**
    * Get the users related to that preference (carreful, it might be ... all users !?)
    */
    public function users()
    {
        return $this->belongsToMany(User::class , 'preference_user'); // arg2 is the pivot table
    }

}
