<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationCategory extends Model
{
    use HasFactory;

    /**
    * Get the users having that role.
    */
    public function users()
    {
        return $this->belongToMany(User::class);
    }

    public function operations()
    {
        $this->hasMany(Operation::class);
    }

}
