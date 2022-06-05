<?php

namespace App\Http\Controllers;

use App\Models\Categories;
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

        // $data = DB::table('medicines')->join('categories', 'category_id', '=', 'categories.id')->where('categories.id', '=', 1)->get();
        $data = Medicines::all();

        return view('medicines.index', compact('data'));
    }
    public function show($id)
    {
        $Medicines = Medicines::find($id);
        return view('Medicines.show', [
            "Medicines" => $Medicines,
        ]);
    }
    public function modals($id)
    {
        $medicines =  Medicines::find($id);
        return view('Medicines.show', [
            "Medicines" => $medicines,
        ]);
    }
    public function med_category(int $categoryID)
    {
        $medicineCollection = Medicines::where('category_id', $categoryID)->get();
        $categoryName = Categories::find($categoryID)->name;
        return view('Medicines.med_by_category', [
            "medicineCollection" => $medicineCollection,
            "categoryID" => $categoryID,
            "categoryName" => $categoryName
        ]);
    }
    public function front_index()
    {
        $medicines = Medicines::all();
        return view('frontend.product', compact('medicines'));
    }
    public function addToCart($id)
    {
        $p = Medicines::find(id);
        $cart = session()->get('cart');
        if (!isset($cart[id])) {
            $cart[$id] = [
                'name' => $p->nama_produk,
                'quantity' => 1, "price" => $p->price, "photo" => $p->image
            ];
        } else {
            $cart[$id]["quantity"]++;
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    /**
     * Get collection of Medicines with generic_name, form, price
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function name_formula_price()
    {
        $medicineCollection = Medicines::select([
            'generic_name',
            'form',
            'price'
        ])->get();
        return view('report.2', [
            "medicineCollection" => $medicineCollection
        ]);
    }

    /**
     * Get collection of Medicines with generic name, form, price
     * and Categories name
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function name_formula_price_catname()
    {
        $medicineCollection = Medicines::select([
            'generic_name',
            'form',
            'price'
        ])->addSelect([
            'category_name' => Categories::select('name')->whereColumn('category_id', 'id'),
        ])->get();

        return view('report.3', [
            "medicineCollection" => $medicineCollection
        ]);
    }

    /**
     * Get collection of Medicines name that only have 1 form
     *
     * @return Illuminate\Database\Eloquent\Collection
     */

    public function one_form()
    {
        $medicineCollection = DB::table('medicines')
            ->select('generic_name', DB::raw('COUNT(id) as total_form'))
            ->groupBy('generic_name')
            ->havingRaw('total_form = ?', [1])
            ->get();

        return view('report.8', [
            "medicineCollection" => $medicineCollection
        ]);
    }
    public function showInfo()
    {
        return response()->json(array('msg' => "ini adalh info", 'status' => 'OKE'), 200);
    }

    public function highest_price()
    {
        $medicineCollection = DB::table('medicines')
            ->select('categories.name as category_name', 'medicines.generic_name', 'medicines.price')
            ->join('categories', 'categories.id', '=', 'medicines.category_id')
            ->whereRaw('medicines.price = ( SELECT MAX(medicines.price) FROM medicines )')
            ->get();

        return view('report.9', [
            "medicineCollection" => $medicineCollection
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Medicines $medicines
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Medicines $medicines
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicines $medicines)
    {
        $data = Medicines::find($medicines);
        return view('medicines.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Medicines $medicines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicines $medicines)
    {
        $data  = Medicines::find($medicines);
        $data->name = $request->get('name');
        $data->description = $request->get('description');
        $data->save();
        return redirect()->route('medicines.index')->with('status', 'Supplier data changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Medicines $medicines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicines $medicines)
    {
        //
    }
}
