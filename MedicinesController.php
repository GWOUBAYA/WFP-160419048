<?php

namespace App\Http\Controllers;

use App\Models\Medicines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = DB::select(DB::raw('select * from medicines'));
        // dd($data);
        $data = DB::table('medicines')->get();
        // $data = Medicines::all();

        return view('medicines.index', compact('queryBuilder'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicines  $medicines
     * @return \Illuminate\Http\Response
     */
    public function show(Medicines $medicines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicines  $medicines
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicines $medicines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicines  $medicines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicines $medicines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicines  $medicines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicines $medicines)
    {
        //
    }
}