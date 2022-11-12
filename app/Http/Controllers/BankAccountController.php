<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountType;
use App\Models\BankAccount;
use App\Models\Icon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class BankAccountController extends Controller
{

	/**
	* Indicates if the validator should stop on the first rule failure
	*
	* @var bool
	*/
	protected $stopOnFirstFailure = true;


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
		//--- verify if user is connected
            // NOTE: this might be useless as the access to this route is thru the middleware who check if you are authenticated.
		if ( Auth::check())
		{
			// SECTION: prepare datas for the view : here datas of previously filled values (temporary)
			$previousFilled_accountTypeId = ''; // you must use type `int`
			$previousFilled_name = "";
			$previousFilled_reference = "";
			$previousFilled_balance = 0;
			$previousFilled_date = date('Y-m-d');
			$previousFilled_description = "";
			$previousFilled_iconId = "";
			$previousFilled_icon_color_hexa = "";

			//--- get instances for all records of table `account_types`
			$accountTypes = AccountType::all();
			//--- create a list of names only + a list of id only
			$accountTypeNames = [];
			$accountTypeIds = [];
			foreach ($accountTypes as $accountType){
				$accountTypeNames[] = $accountType->name;
				$accountTypeIds[] = $accountType->id;
			}

			//--- get instances for all records of table `icons`
            $icons = Icon::all();
			//--- create a list of names only + a list of id only
			$iconNames = [];
			$iconIds = [];
			foreach ($icons as $icon){
				$iconNames[] = $icon->google_icon_ref;
				$iconIds[] = $icon->id;
            }

			// SECTION : return the view with datas
			return view(
				'bankAccount.create' ,  // view name
				[                       // datas given to the view
					'previousFilled_accountTypeId' => $previousFilled_accountTypeId,
					'previousFilled_name' => $previousFilled_name,
					'previousFilled_reference' => $previousFilled_reference,
					'previousFilled_balance' => $previousFilled_balance,
					'previousFilled_date' => $previousFilled_date,
					'previousFilled_description' => $previousFilled_description,
					'previousFilled_iconId' => $previousFilled_iconId,
					'previousFilled_icon_color_hexa' => $previousFilled_icon_color_hexa,
					'accountTypeNames' => $accountTypeNames,
					'accountTypeIds' => $accountTypeIds,
					'iconNames' => $iconNames,
					'iconIds' => $iconIds
				]
			);
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// dd($request);

		/* NOTE : possible to use :
		* 'myproperty' => 'rule1:xxx|rule2|rule3:xxx'
		* OR
		* 'myproperty' => ['rule1:xxx','rule2','rule3:xxx']
		*/
		$validatedData = $request->validate([
			"bank_account_type" => "required|integer|numeric|min:1",
			"bank_account_name" => "required|max:50",
			"bank_account_reference" => "max:100",
			"bank_account_description" => "",
			// "bank_account_balance" => "required|integer|numeric|max:999999999999999999999999|min:-999999999999999999999999", // 24 digit
			"bank_account_balance" => "required|integer|numeric|max:999999999999|min:-999999999999", // 12 digit
			"bank_account_balance_date" => "required|date|before_or_equal:now",
			"bank_account_icon_color_hexa" => "regex:/^\#[0-9abcdef]{6}$/i", //accept color hexa
			"bank_account_icon_id" => "required|integer|numeric|min:1",
		]);

		// TODO : wrap in a condition : IF ($validatedData)

        //--- METHOD 2
        $newBankAccount = new BankAccount();
        $newBankAccount->user_id = Auth::user()->id;
        $newBankAccount->account_type_id = $request->bank_account_type;
        $newBankAccount->name = $request->bank_account_name;
        $newBankAccount->reference = $request->bank_account_reference;
        $newBankAccount->description = $request->bank_account_description;
        $newBankAccount->balance = $request->bank_account_balance;
        $newBankAccount->balance_date = $request->bank_account_balance_date;
        $newBankAccount->icon_color_hexa = $request->bank_account_icon_color_hexa;
        $newBankAccount->icon_id = $request->bank_account_icon_id;

        $newBankAccount->save();

        return redirect('dashboard');
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
