<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitPLNRequest;
use App\Models\UnitPLN;
use Illuminate\Http\Request;

class UnitPLNController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unitPlns = UnitPLN::all();
        return view("unit-pln.index", [
            "unitPlns" => $unitPlns,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("unit-pln.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitPLNRequest $request)
    {
        $data = $request->all();

        UnitPLN::create($data);
        return redirect()->route("unitPln.index");
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
        $unitPln = UnitPLN::findOrFail($id);

        return view("unit-pln.edit", [
            "unitPln" => $unitPln,
        ]);
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
        $data = $request->all();

        $item = UnitPLN::findOrFail($id);
        $item->update($data);

        return redirect()->route("unitPln.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = UnitPLN::findOrFail($id);
        $item->delete();

        return redirect()->route("unitPln.index");

    }
}
