<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        "room_name",
        "capacity",
        "unit_pln_id"
    ];

    public function unit_pln()
    {
        return $this->belongsTo(UnitPLN::class, "unit_pln_id", "id");
    }

    public function order_meetings()
    {
        return $this->hasMany(OrderMeeting::class, "meeting_room_id", "id");
    }
}
