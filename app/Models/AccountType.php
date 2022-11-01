<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    use HasFactory;

    /**
    * Get the bank-accounts using that account-type.
    */
    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class);
    }
}
