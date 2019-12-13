<?php

namespace App\Http\Controllers;

use App\Curriculums;
use Illuminate\Http\Request;

class CurriculumsController extends Controller
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
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curriculums  $curriculums
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculums $curriculums)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curriculums  $curriculums
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculums $curriculums)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curriculums  $curriculums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculums $curriculums)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curriculums  $curriculums
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculums $curriculums)
    {
        //
    }
}
