<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountType;
use Illuminate\Support\Facades\DB;

class BankAccountController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\View\View
	 */
	public function create()
	{
        $previousFilled_accountTypeId = 1;
        $previousFilled_name = "";
        $previousFilled_reference = "";
        $previousFilled_balance = 0;
        $previousFilled_date = date('Y-m-d');

        //--- get instances for all records of table `account_types`
        $accountTypes = AccountType::all();
        //--- create a list of names only + a list of id only
        $accountTypeNames = [];
        $accountTypeIds = [];
        foreach ($accountTypes as $accountType){
            $accountTypeNames[] = $accountType->name;
            $accountTypeIds[] = $accountType->id;
        }


		return view(
			'bankAccount.create' ,  // view name
			[                       // datas given to the view
                'previousFilled_accountTypeId' => $previousFilled_accountTypeId,
                'previousFilled_name' => $previousFilled_name,
                'previousFilled_reference' => $previousFilled_reference,
                'previousFilled_balance' => $previousFilled_balance,
                'previousFilled_date' => $previousFilled_date,
                'accountTypeNames' => $accountTypeNames,
                'accountTypeIds' => $accountTypeIds,
			]
		);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
