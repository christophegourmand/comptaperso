<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    /**
    * Get the account-type of that bank-account.
    */
    public function accountType()
    {
        return $this->belongsTo(AccountType::class);
    }

    /**
    * Get the users who possess this bank-account.
    */
    public function users()
    {
        return $this->belongsToMany(User::class , 'bank_account_user'); // arg2 is the pivot table
    }

}
