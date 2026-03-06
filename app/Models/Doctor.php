<?php

namespace App\Models;
use App\Models\appointment;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable =[
        'user_id',
        'department_id',    
        'specialization',
        'experience',
        'consultation_fee',
        'opd_start',
        'opd_end',
        'slot_duration',
        'weekly_off',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
}
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}