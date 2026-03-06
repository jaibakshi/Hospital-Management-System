<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use App\Models\appointment; 

class DoctorDashboardController extends Controller
{
    public function appointments()
    {
        $doctor = Doctor::where('user_id', auth()->id())->first();

        if(!$doctor){
            abort(403);
        }

        $appointments = $doctor->appointments()
                        ->with('user')
                        ->where('doctor_id', $doctor->id)
                        ->orderBy('appointment_date')
                        ->orderBy('appointment_time')
                        ->get();
        
        return view('doctor.doctorappointment', compact('appointments'));

        }   
        public function patients(){
            $doctor = Doctor::where('user_id', auth()->id())->first();

            $patients = User::whereHas('appointments',function($query) use($doctor){
                $query->where('doctor_id',$doctor->id);
            })
            ->withCount(['appointments as total_appointments' => function ($query)use ($doctor){
                $query->where('doctor_id',$doctor->id);
            }])
            ->get();

            
            return view('doctor.patients', compact('patients'));
                        
        }

        public function dashboard(){
            $doctor = Doctor::where('user_id', auth()->id())->first();
            $total_appointment = Appointment::where('doctor_id', $doctor->id)->count();
            $today_appointment = Appointment::where('doctor_id',$doctor->id)
            ->whereDate('appointment_date', today())  
            ->count();
            $total_patient = Appointment::where('doctor_id',$doctor->id)
            ->distinct('user_id')
            ->count('user_id');
            $upcoming_appointment = Appointment::where('doctor_id', $doctor->id)
            ->whereDate('appointment_date' ,'>', today())
            ->count();

            return view('doctor.doctordashboard',compact('total_appointment', 'today_appointment', 
            'total_patient','upcoming_appointment'));
        }
}
