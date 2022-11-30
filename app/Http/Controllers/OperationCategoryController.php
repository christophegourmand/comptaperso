<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OperationCategory;
use App\Models\Icon;
use App\Models\Operation;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ValidatedInput;

class OperationCategoryController extends Controller
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
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
			//--- get instances for all records of table `icons`
			$icons = Icon::all();
			//--- create a list of names only + a list of id only
			$iconNames = [];
			$iconIds = [];
			foreach ($icons as $icon){
				$iconNames[] = $icon->google_icon_ref;
				$iconIds[] = $icon->id;
			}

		return view(
			'operationCategory.create',
			[
				'iconNames' => $iconNames,
				'iconIds' => $iconIds
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

		// $request->operation_category_is_visible =  $request->has("operation_category_is_visible") ? true : false;
		// $request->operation_category_is_counted_in_balance =  $request->has("operation_category_is_counted_in_balance") ? true : false;


		// dd($request); // DEBUG

		$validatedData = $request->validate([
			"operation_category_name" => "required|max:50",
			"operation_category_is_visible" => "sometimes|accepted",
			"operation_category_is_counted_in_balance" => "sometimes|accepted",
			"operation_category_monthly_limit" => "min:0|max_digits:24",
			"operation_category_annual_limit" => "min:0|max_digits:24",
			"operation_category_icon_color_hexa" => "regex:/^\#[0-9abcdef]{6}$/i",
			"operation_category_icon_id" => "required|integer|numeric|min:1",
		]);

		// dd($validatedData);

		//--- store datas in instance then save it in database

        // first: what is obvious:
		$operationCategory = new OperationCategory();
		$operationCategory->user_id = Auth::user()->id;

		// v1
        /*
		$operationCategory->name = $request->operation_category_name;
		$operationCategory->is_visible = $request->operation_category_is_visible;
		$operationCategory->is_counted_in_balance = $request->operation_category_is_counted_in_balance;
		$operationCategory->icon_id = $request->operation_category_icon_id;
		$operationCategory->icon_color_hexa = $request->operation_category_icon_color_hexa;
		$operationCategory->monthly_limit = $request->operation_category_monthly_limit;
		$operationCategory->annual_limit = $request->operation_category_annual_limit;
        */

		// v2
        /*
		foreach ($request->safe() as $key => $value)
        {
            $operationCategory->$key = $value;
        }
        */

        //v3
        foreach ($validatedData as $key => $value)
        {
            // remove prefix in key (coming from id="" of each input in form)
            $key = str_replace('operation_category_' , '', $key);
            $operationCategory->$key = $value;
        }

		$operationCategory->save();

		return redirect('dashboard');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\OperationCategory  $operationCategory
	 * @return \Illuminate\Http\Response
	 */
	public function show(OperationCategory $operationCategory)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\OperationCategory  $operationCategory
	 * @return \Illuminate\Http\Response
	 */
	public function edit(OperationCategory $operationCategory)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\OperationCategory  $operationCategory
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, OperationCategory $operationCategory)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\OperationCategory  $operationCategory
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(OperationCategory $operationCategory)
	{
		//
	}
}
