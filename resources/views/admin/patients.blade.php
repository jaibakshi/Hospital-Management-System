@extends('layouts.main')
    @section('content')

    <style>
        table{
            margin-left:140px;
        }
    </style>
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold text-primary">👥 Patient List</h2>
            <p class="text-muted">Manage and view all patient records</p>
        </div>
        <table class="table table-striped table-hover shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Gender</th>
                    <th>Total Appointment</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $index=>$patient)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>{{ $patient->appointments_count }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection