<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function getDoctor($id)
    {
        $doctors = Doctor::with('user')
        ->where('department_id', $id)
        ->get();
        return response()->json($doctors);
    }

    public function getslots(Request $request)
    {
        $doctor_id = $request->doctor_id;
        $date = $request->appointment_date;

        $doctor = Doctor::find($doctor_id);

        if(!$doctor || !$date){
            return response()->json([]);

        }

        if(Carbon::parse($date)->lt(Carbon::today())){
            return response()->json([
                'status' => 'error',
                'message' => 'you cannot book an appointment for a past date'
            ]);
        }

        $selectedDay = Carbon::parse($date)->dayOfWeekIso;

        if($selectedDay == $doctor->weekly_off){
            return response()->json([
                'status' => 'off',
                'message' => 'Doctor is off on this day'
            ]); 
        }

        $start = Carbon::parse($doctor->opd_start);
        $end = Carbon::parse($doctor->opd_end);
        $duration = $doctor->slot_duration;

        $slots = [];

        while($start < $end){
            $slots[] = $start->format('H:i');
            $start->addMinutes($duration);
        }

        $booked = Appointment::where('doctor_id', $doctor_id)
                                ->where('appointment_date' , $date)
                                ->pluck('appointment_time')
                                ->toArray();
        
        $available = array_diff($slots, $booked);

        return response()->json(array_values($available));


    }

    public function store(Request $request) 
    {
        $request->validate([
            // 'user_id' => 'required|exists:users,id',
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
        ]);

        $exists = Appointment::where('doctor_id', $request->doctor_id)
        ->where('appointment_date', $request->appointment_date)
        ->where('appointment_time', $request->appointment_time)
        ->exists();

        if($exists) {
            return back()->with('error', 'Slot already booked');
        }

        Appointment::create([
            'user_id' => auth()->id(),
            'doctor_id' => $request->doctor_id,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'status' => 'confirmed',   
        ]);

        return back()->with('success', 'Appointment Booked');
    }

    public function userAppointments()
    {
        $appointments = Appointment::where('user_id', auth()->id())
                        ->orderBy('appointment_date', 'desc')
                        ->orderBy('appointment_time', 'desc')
                        ->get();

        return view('user-see-total-appointment', compact('appointments'));
    }

    public function adminAppointments()
    {
        $appointments = Appointment::with(['doctor.user','user'])
                        ->orderBy('appointment_date', 'desc')
                        ->orderBy('appointment_time', 'desc')
                        ->get();
        return view('admin.total-appointment-show', compact('appointments'));
    }

}
