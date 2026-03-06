@extends('layouts.doctormain')
    @section('content')

                          <!-- Stats Row -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <h3 class="text-primary">{{ $today_appointment }}</h3>
                            <p class="text-muted">Today's Appointments</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <h3 class="text-success">{{ $total_patient }}</h3>
                            <p class="text-muted">Total Patients</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <h3 class="text-warning">{{ $total_appointment }}</h3>
                            <p class="text-muted">Toal Appointments</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <h3 class="text-info">{{ $upcoming_appointment }}</h3>
                            <p class="text-muted">Upcoming Appointments</p>
                        </div>
                    </div>
                </div>

                <!-- Appointments Table -->
                <div class="card mb-4">
                    <div class="card-header bg-light">
                        <h5 class="mb-0">Today's Appointments</h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Patient Name</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>09:00 AM</td>
                                    <td>John Doe</td>
                                    <td>Checkup</td>
                                    <td><span class="badge bg-success">Confirmed</span></td>
                                    <td><button class="btn btn-sm btn-primary">View</button></td>
                                </tr>
                                <tr>
                                    <td>10:30 AM</td>
                                    <td>Jane Smith</td>
                                    <td>Follow-up</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td><button class="btn btn-sm btn-primary">View</button></td>
                                </tr>
                                <tr>
                                    <td>02:00 PM</td>
                                    <td>Mike Johnson</td>
                                    <td>Consultation</td>
                                    <td><span class="badge bg-success">Confirmed</span></td>
                                    <td><button class="btn btn-sm btn-primary">View</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
    @endsection