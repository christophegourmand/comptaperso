<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    public function bankAccount()
    {
        return $this->belongsTo(BankAccount::class);
    }

    public function category()
    {
        return $this->belongsTo(OperationCategory::class);
    }

    public function thirdparty()
    {
        return $this->belongsTo(Thirdparty::class);
    }


    public function status() // REVIEW : should i call it `operationStatus`
    {
        return $this->belongsTo(OperationStatus::class);
    }

    public function type() // REVIEW : should i call it `operationType`
    {
        return $this->belongsTo(OperationType::class);
    }

    public function recurring() // REVIEW : should i call it `operationRecurring`
    {
        return $this->belongsTo(OperationRecurring::class);
    }



}
