@extends('layouts.doctormain')
    @section('content')

    <div class="container mt-5">
        <h2>Doctor Appointments</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>S.No</th>
                    <th>Patient Name</th>
                    <th>Phone Number</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $index => $appointment)
                <tr>
                    <td>{{$index + 1 }}</td>
                    <td>{{$appointment->user->name }}</td>
                    <td>{{$appointment->user->phone }}</td>
                    <td>{{$appointment->appointment_date }}</td>
                    <td>{{$appointment->appointment_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection