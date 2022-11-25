<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thirdparty;
use App\Models\ThirdpartyComment;
use App\Models\User; // REVIEW : is it really usefull as we can use $Thirdparty->user_id = Auth::user()->id;  ?

use Illuminate\Support\Facades\Auth;

class ThirdpartyController extends Controller
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
        //--- columns in table `thirdparties` : id , user_id , nom , created_at , updated_at
        return view(
            'thirdparty.create'
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
			"thirdparty_name" => "required|max:100",
			"thirdparty_shortdescription" => "max:255",
            "thirdparty_note" => "max:16000000"
		]);

        $thirdparty = new Thirdparty();
        $thirdparty->user_id = Auth::user()->id;
        $thirdparty->name = $request->thirdparty_name;
        $thirdparty->shortdescription = $request->thirdparty_shortdescription;
        $thirdparty->note = $request->thirdparty_note;
        $thirdparty->save();

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
        $thirdparty = Thirdparty::find($id);
        $thirdpartyComments = ThirdpartyComment::where('thirdparty_id',$id)->get();
        return view(
            'thirdparty.show',
            compact('thirdparty', 'thirdpartyComments')
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
