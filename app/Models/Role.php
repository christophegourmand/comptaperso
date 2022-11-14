<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
    * Get the users having that role.
    */
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user'); // arg2 is the pivot table
    }
}
