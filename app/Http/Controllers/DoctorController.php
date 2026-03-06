<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Doctor;
use App\Models\Department;
use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('admin.admin_doctor_CRUD', compact('doctors'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('admin.create_doctor', compact('departments'));
    }

     public function store(Request $request)
{
    // 1. Validation check (Sabse pehle yahi fail hoti hai)
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'phone' => 'required',
        'department_id' => 'required|exists:departments,id',
        'specialization' => 'required',
        'experience' => 'required|integer',
        'consultation_fee' => 'required|numeric', 
        'password' => 'required|min:6',
        'opd_start' => 'required',
        'opd_end' => 'required',
        'slot_duration' => 'required',
        'gender' => 'required',
        'dob' => 'required|date'
    ]);

    // 2. User Create (Pehle ye check karo ki User table mein data ja raha hai)
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => Hash::make($request->password),
        'logintype' => 'doctor',
        'dob' => $request->dob,
        'gender' => $request->gender,
    ]);

    // 3. Doctor Create (Yahan mismatch theek kiya hai)
    Doctor::create([
        'user_id' => $user->id,
        'department_id' => $request->department_id, // Pehle yahan $department->id tha jo galat tha
        'specialization' => $request->specialization,
        'experience' => $request->experience,
        'consultation_fee' => $request->consultation_fee,
        'opd_start' => $request->opd_start, 
        'opd_end' => $request->opd_end,
        'slot_duration' => $request->slot_duration,
        'weekly_off' => $request->weekly_off,
    ]);

    return redirect()->route('admin.doctor')->with('success', 'Doctor Created Successfully!');
}

    public function edit($id){
        $doctor = Doctor::findOrfail($id);
        $departments = Department::all();

        return view('admin.edit_doctor', compact('doctor', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrfail($id);
        $department = $doctor->department;
        $user = $doctor->user;

         $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required',
            'specialization' => 'required',
            'experience' => 'required',
            'consultation_fee' => 'required', 
            'department_id' => 'required',
            'opd_end' => 'required'
        ]);
        
        $doctor->update([
            'specialization' => $request->specialization,
            'experience' => $request->experience,
            'consultation_fee' => $request->consultation_fee,
            'department_id' => $request->department_id,
            'opd_end' => $request->opd_end
        ]);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('admin.doctor')
            ->with('success', 'Doctor updated successfully.');
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrfail($id);
        $doctor->user()->delete();

        return redirect()->route('admin.doctor')
            ->with('success', 'Doctor deleted successfully.');
    }

    public function dashboard(){
        $total_appointment = Appointment::count();
        $today_appointment = Appointment::whereDate('appointment_date',today())->count();
        $total_doctor = Doctor::count();
        $total_patient = User::where('logintype','user')->count();
        return view('admin.admindashboard', compact('total_appointment','today_appointment','total_doctor','total_patient'));

    }

    
}
