<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use RealRashid\SweetAlert\Facades\Alert;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tally = Vote::select('tally')->SUM('tally');
        // $tally_votes = $tally / 3;
        return view('welcome', compact('tally'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = request()->validate([
            'tally' => 'required',
            'email' => 'required|email',
            'contestCode' => 'required',
            'contest' => 'required',
        ]);

        $data = new Vote;
        $data->tally = $request->input('tally');
        $data->email = $request->input('email');
        $data->contest = $request->input('contest');
        $data->contestCode = $request->input('contestCode');
        $data->ref = $request->input('ref');
        $data->amount = $request->input('amount');

        $data->save();

        return redirect('/')->with('success','Your Tally vote has been added to the contestant tallies!');
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
