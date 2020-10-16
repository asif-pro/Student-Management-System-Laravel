<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Claasses;
use Illuminate\Http\Request;

class ClaassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.add-class');
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
         DB::table('claasses')->insert(['tname'      => $request->tname,
                                           'tid'     => $request->tid,
                                           'class'   => $request->class,
                                           'subject' => $request->subject,
                                           'section' => $request->section,
                                           'stime'   => $request->stime,
                                           'ftime'   => $request->ftime,
                                           'day'     => $request->day]);

    
        return redirect('/all-class');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Claasses  $claasses
     * @return \Illuminate\Http\Response
     */
    public function show(Claasses $claasses)
    {
        $claasses = DB::table('Claasses')->get();
        return view('admin.all-class')->with('claasses', $claasses);
        //return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Claasses  $claasses
     * @return \Illuminate\Http\Response
     */
    public function edit(Claasses $claasses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Claasses  $claasses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Claasses $claasses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Claasses  $claasses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Claasses $claasses)
    {
        //
    }
}