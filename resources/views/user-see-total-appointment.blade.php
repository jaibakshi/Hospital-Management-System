@extends('layouts.usermain')
    @section('content')
    <style>
        .change {
            color: #333;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
        }

        .table {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .table thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .table thead th {
            padding: 15px;
            font-weight: 600;
            border: none;
            text-align: center;
        }

        .table tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #e0e0e0;
        }

        .table tbody tr:hover {
            background-color: #f8f9ff;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }

        .table tbody td {
            padding: 12px 15px;
            text-align: center;
            vertical-align: middle;
        }

        .alert-info {
            background: linear-gradient(135deg, #e3f2fd 0%, #f3e5f5 100%);
            border: 2px solid #667eea;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            color: #333;
            font-weight: 500;
        }

        .container {
            padding: 30px;
        }
    </style>

        <div class="container">
    
            <h2 class="mb-4 change">My Appointments</h2>
            @if($appointments->isNotEmpty() )

                <table class ="table table-bordered">
                    <thead>
                        <th>S.No</th>
                        <th>Doctor</th>
                        <th>Date</th>
                        <th>Time</th>
                    </thead>

                    <tbody>
                        @foreach($appointments as $index=>$appointment)
                        <tr>
                            <td>{{$index + 1}}</td>
                            <td>{{$appointment->doctor->user->name}}</td>
                            <td>{{$appointment->appointment_date}}</td>
                            <td>{{$appointment->appointment_time}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
              @else
              <div class="alert alert-info ">
                No appointment yet.
              </div>  
              @endif
        </div>

@endsection