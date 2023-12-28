<?php

namespace App\Http\Controllers;

use App\Http\Requests\MeetingRoomRequest;
use App\Models\MeetingRoom;
use App\Models\UnitPLN;
use Illuminate\Http\Request;

class MeetingRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = MeetingRoom::with(["unit_pln"])->get();

        return view("meeting-room.index", [
            "items" => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unitPLN = UnitPLN::all();
        return view("meeting-room.create", [
            "unitPLN" => $unitPLN,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MeetingRoomRequest $request)
    {
        $data = $request->all();

        MeetingRoom::create($data);
        return redirect()->route("meetingRoom.index");
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
        $item = MeetingRoom::findOrFail($id);
        $unit_plns = UnitPLN::all();

        return view("meeting-room.edit", [
            "item" => $item,
            "unit_plns" => $unit_plns,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MeetingRoomRequest $request, $id)
    {
        $data = $request->all();

        $item = MeetingRoom::findOrFail($id);
        $item->update($data);

        return redirect()->route("meetingRoom.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = MeetingRoom::findOrFail($id);
        $item->delete();

        return redirect()->route("meetingRoom.index");
    }
}
