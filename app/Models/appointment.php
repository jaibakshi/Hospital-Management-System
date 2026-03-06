<?php

namespace App\Models;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected$fillable = [
        'user_id',
        'doctor_id',
        'appointment_date', 
        'appointment_time',
        'status',
    ];

        public function user() {
            return $this->belongsTo(User::class);
        }

        public function doctor() {
            return $this->belongsTo(Doctor::class);
        }
}
