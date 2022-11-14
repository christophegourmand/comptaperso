<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;


    /**
    * Get the bank-accounts of that user.
    */
    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class);
    }

}
