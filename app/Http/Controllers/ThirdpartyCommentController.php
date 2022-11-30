<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thirdparty;
use App\Models\ThirdpartyComment;
use Illuminate\Support\Facades\Route;

class ThirdpartyCommentController extends Controller
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
    public function create($thirdparty_id)
    {
        $thirdparty = Thirdparty::find($thirdparty_id);
        return view(
            'thirdpartyComment.create',
            compact('thirdparty')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($thirdparty_id , Request $request)
    {
        // dd($request);
        // Route::post('/thirdparties/{thirdparty_id}/thirdpartyComments' , function($thirdparty_id, $request){
        // });

        $validedData = $request->validate([
            "formfield_comment" => "required|max:16000000"
        ]);

        $thirdpartyComment = new ThirdpartyComment();
        $thirdpartyComment->thirdparty_id = $thirdparty_id;
        $thirdpartyComment->comment = $request->formfield_comment;
        $thirdpartyComment->save();

        return redirect('thirdparties/'.$thirdparty_id) ;


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
    public function destroy($thirdparty_id, $thirdpartyComment_id)
    {
        $thirdpartyComment = ThirdpartyComment::find($thirdpartyComment_id);
        $thirdpartyComment->delete();

        return redirect('thirdparties/'.$thirdparty_id);
    }
}
