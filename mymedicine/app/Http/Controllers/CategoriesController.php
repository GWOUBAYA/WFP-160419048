<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('categories')->get();
        // $data = Medicines::all();

        return view('categories.index', compact('data'));
    }
    public function count_have_medicine()
    {
        $countHaveMedicine =
            DB::table('categories')
            ->distinct()
            ->select('categories.id')
            ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
            ->whereNotNull('medicines.id')
            ->count('categories.id');


        return view('admin.report.4', [
            "number" => $countHaveMedicine
        ]);
    }

    /**
     * Get collection of category name that doesn't have medicine data
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function show_haveno_medicine()
    {
        $categoryCollection =
            DB::table('categories')
            ->distinct()
            ->select('categories.name')
            ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
            ->whereNull('medicines.id')
            ->get();


        return view('admin.report.5', [
            "categoryCollection" => $categoryCollection
        ]);
    }

    /**
     * Get collection of category name and average price for each category
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function avg_price()
    {
        $categoryCollection = DB::table('categories')
            ->select('categories.name', DB::raw('IFNULL(AVG(price),0)'))
            ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
            ->groupBy('categories.id')
            ->get();

        return view('admin.report.6', [
            "categoryCollection" => $categoryCollection
        ]);
    }

    /**
     * Get collection of category name that have one medicine only
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function have_one_medicine_only()
    {
        $categoryCollection = DB::table('medicines')
            ->select('categories.name', DB::raw('COUNT(categories.id) as total'))
            ->leftJoin('categories', 'categories.id', '=', 'medicines.category_id')
            ->groupBy('categories.id')
            ->havingRaw('total = ?', [1])
            ->get();

        return view('admin.report.7', [
            "categoryCollection" => $categoryCollection
        ]);
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
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories)
    {
        //
    }
}