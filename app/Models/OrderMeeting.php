<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderMeeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'meeting_room_id',
        'user_id',
        'meeting_date',
        'start_time',
        'end_time',
        'type_of_consumtion',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function meeting_rooms()
    {
        return $this->belongsTo(MeetingRoom::class, "meeting_room_id", "id");
    }
}
