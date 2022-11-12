<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\AccountType;
use App\Models\BankAccount;
use App\Models\Company;

class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //--- retrieve bank accounts of connected user:
        $userId = Auth::user()->id;
        $bankAccounts = BankAccount::where('user_id' , $userId)->get();
        $companies = Company::where('user_id' , $userId)->get();

        return view(
            'dashboard',
            [
                'bankAccounts' => $bankAccounts,
                'companies' => $companies
            ]
        );
    }



}
