<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitPLN extends Model
{
    use HasFactory;

    protected $fillable = [
        "unit_pln_name",
        "address",
        "number_of_rooms"
    ];

    public function users()
    {
        return $this->hasMany(User::class, "unit_pln_nid", "id");
    }

    public function meeting_rooms()
    {
        return $this->hasMany(MeetingRoom::class, "unit_pln_id", "id");
    }
}
