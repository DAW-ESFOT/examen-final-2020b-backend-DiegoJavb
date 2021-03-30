<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return response()->json(Supplier::all(), 200);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = Supplier::create($request->all());
        return response()->json($supplier, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return response()->json($supplier, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier->update($request->all());
        return response()->json($supplier, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, Supplier $supplier)
    {
        //$this->authorize('delete',$supplier);
        $supplier->delete();
        return response()->json(null, 200);
    }
}
