<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\CompanyComment;
use App\Models\User; // REVIEW : is it really usefull as we can use $Company->user_id = Auth::user()->id;  ?

use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
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
        //--- columns in table `companies` : id , user_id , nom , created_at , updated_at
        return view(
            'company.create'
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
        $validatedData = $request->validate([
			"company_name" => "required|max:100",
			"company_shortdescription" => "max:255",
            "company_note" => "max:16000000"
		]);

        $company = new Company();
        $company->user_id = Auth::user()->id;
        $company->name = $request->company_name;
        $company->shortdescription = $request->company_shortdescription;
        $company->note = $request->company_note;
        $company->save();

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
        $company = Company::find($id);
        $companyComments = CompanyComment::where('company_id',$id)->get();
        return view(
            'company.show',
            [
                'company' => $company,
                'companyComments' => $companyComments
            ]
        );
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
