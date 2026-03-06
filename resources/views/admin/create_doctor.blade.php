@extends('layouts.main')
@section('content')
    <style>
        .change-location{
            padding: 10px 12px 20px 260px;
        }
    </style>
    <div class="container mt-5 change-location">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="row g-0">
                        <!-- Left Page -->
                        <div class="col-md-6 bg-light border-end p-5">
                            <h2 class="text-center mb-4 text-primary">Create Doctor</h2>
                            <form method="POST" action="{{ route('admin.doctor.store') }}">
                                
                                @csrf
                                
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>

                                <div class="mb-3">
                                    <label for="dob" class="form-label">DOB</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                </div>

                                <div class="mb-3">
                                    <label for="opd_start" class="form-label">OPD Start time</label>
                                    <input type="time" class="form-control" id="opd_start" name="opd_start" required>
                                </div>
                               
                                <div class="mb-3">
                                    <label for="opd_end" class="form-label">OPD End time</label>
                                    <input type="time" class="form-control" id="opd_end" name="opd_end" required>
                                </div>
                                <div class="mb-3">
                                    <label for="slot_duration" class="form-label">Slot Duration (minutes)</label>
                                    <input type="number" class="form-control" id="slot_duration" name="slot_duration" required>
                                </div>
                        </div>
                        
                        <!-- Right Page -->
                        <div class="col-md-6 p-5">

                                    <div class="mb-3">
                                    <label for="weekly_off" class="form-label">Weekly Off b/w (1-7)</label>
                                    <input type="text" class="form-control" id="weekly_off" name="weekly_off" required>
                                </div>

                            <div class="mb-3">
                                <label for="department" class="form-label">Department</label>
                                <select class="form-select" id="department" name="department_id" required>
                                    <option value="">Select Department</option>
                                    @foreach($departments as $dept)
                                        <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                        @endforeach
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="specialization" class="form-label">Specialization</label>
                                <input type="text" class="form-control" id="specialization" name="specialization" required>
                            </div>
                            <div class="mb-3">
                                <label for="experience" class="form-label">Experience (years)</label>
                                <input type="number" class="form-control" id="experience" name="experience" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="fee" class="form-label">Consultation Fee</label>
                                <input type="number" class="form-control" id="fee" name="consultation_fee" required>
                            </div>
                            <div class="mb-3">
                                   <label for="gender" class="form-label">Gender</label>
                                   <select class="form-select" id="gender" name="gender" required>
                                       <option value="">Select Gender</option>
                                       <option value="male">Male</option>
                                       <option value="female">Female</option>
                                       <option value="other">Other</option>
                                   </select>
                               </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            

                            <div class="d-flex gap-2 mt-4">
                                <button type="submit" class="btn btn-primary flex-grow-1">Create Doctor</button>
                                <button type="reset" class="btn btn-secondary flex-grow-1">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>

    @endsection