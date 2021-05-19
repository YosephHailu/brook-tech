<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "phone",
        "plate_no",
        "date",
        "appointment_status_id",
        "confirmed",
    ];

    protected $dates = ['date', 'created_at', 'updated_at'];
    
    public function appointmentStatus()
    {
        return $this->belongsTo('App\Models\AppointmentStatus');
    }
}
