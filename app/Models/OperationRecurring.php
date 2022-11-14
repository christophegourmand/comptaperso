<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationRecurring extends Model
{
    use HasFactory;


    public function operations()
    {
        $this->hasMany(Operation::class);
    }

}
