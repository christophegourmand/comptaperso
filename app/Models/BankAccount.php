<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
	use HasFactory;

	public static array $fieldsInfos = [
		'id' => [
			'fieldnameInSql' => 'id'
			, 'fieldnameInHtml' => 'id'
			, 'canBeDisplayed' => false
			, 'canBeSet' => false
			, 'htmlInputType' => 'number'
			, 'phpType' => 'int'
			, 'regex' => "/[^\d]/"
		],
		'user_id' => [
			'fieldnameInSql' => 'user_id'
			, 'fieldnameInHtml' => 'id'
			, 'canBeDisplayed' => false
			, 'canBeSet' => false
			, 'htmlInputType' => 'number'
			, 'phpType' => 'int'
			, 'regex' => "/[^\d]/"
		],
		'account_type_id' => [
			'fieldnameInSql' => 'account_type_id'
			, 'fieldnameInHtml' => 'id'
			, 'canBeDisplayed' => false
			, 'canBeSet' => false
			, 'htmlInputType' => 'number'
			, 'phpType' => 'int'
			, 'regex' => "/[^\d]/"
		],
        'name' => [
			'fieldnameInSql' => 'name'
			, 'fieldnameInHtml' => 'Nom'
			, 'canBeDisplayed' => true
			, 'canBeSet' => true
			, 'htmlInputType' => 'text'
			, 'phpType' => 'string'
			, 'regex' => "/[^\w\s\-]/iu"
			, 'max_length' => 50
		],
		'reference' => [
			'fieldnameInSql' => 'reference'
			, 'fieldnameInHtml' => 'Référence'
			, 'canBeDisplayed' => true
			, 'canBeSet' => true
			, 'htmlInputType' => 'text'
			, 'phpType' => 'string'
			, 'regex' => "/[^\w\s\-]/iu"
			, 'max_length' => 100
		],
        'description' => [
			'fieldnameInSql' => 'description'
			, 'fieldnameInHtml' => 'Description'
			, 'canBeDisplayed' => true
			, 'canBeSet' => true
			, 'htmlInputType' => 'textarea'
			, 'phpType' => 'string'
			, 'regex' => "/[^\w\s\'\_\-\"\,\.\!\?\:\;\&\(\)\r\n\/]/iu"
			, 'max_length' => 16777215
		],
        //TODO: ajouter 'nullable':true/false == required
	];


    // =====================================
    // SECTION : Relationships
    // =====================================


	/**
	* Get the account-type of that bank-account.
	*/
	public function accountType()
	{
		return $this->belongsTo(AccountType::class);
	}

	/**
	* Get the user who possess this bank-account.
	*/
	public function user()
	{
		return $this->belongsTo(User::class);
	}

    public function balanceFormatted()
    {
        $decimalSeparator = ',';
        $thousandSeparator = ' ';
        $localCurrancySymbol = '€';

        $balanceFormatted = number_format($this->balance , 2 , $decimalSeparator , $thousandSeparator);
        $balanceFormatted .= " " . $localCurrancySymbol;

        return $balanceFormatted;
    }

    /**
    * Get the bank-accounts using that account-type.
    */
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }


    public function operations()
    {
        $this->hasMany(Operation::class);
    }

    // =====================================
    // SECTION : other methods
    // =====================================

    public function getIconRef()
    {
        $icon = Icon::find( $this->icon_id );

        return $icon->google_icon_ref;
    }


}
