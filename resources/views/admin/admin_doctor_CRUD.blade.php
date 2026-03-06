@extends('layouts.main')
    @section('content')
    <style>
    .main-content-view {
        padding: 10px 12px 20px 260px;
    }
    </style>
    <div class="main-content-view ">
       
        <table class="table table-bordered mt-3 table-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Department</th>
                    <th>Specialization</th>
                    <th>Experience</th>
                    <th>Consultation Fee</th>   
                    <th style="width:120px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $index =>$doctor)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $doctor->user->name }}</td>
                    <td>{{ $doctor->user->email }}</td>
                    <td>{{ $doctor->user->phone }}</td>
                    <td>{{ $doctor->department->name }}</td>
                    <td>{{ $doctor->specialization }}</td>
                    <td>{{ $doctor->experience }}</td>
                    <td>{{ $doctor->consultation_fee }}</td>    
                    <td>
                        <!-- Edit and Delete buttons can be added here -->
                         <!-- <form action="{{ route('admin.doctor.edit', $doctor->id) }}" method = "GET"></form> -->
                        <a href="{{ route('admin.doctor.edit', $doctor->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.doctor.destroy', $doctor->id) }}" method = "POST"
                                style="display:inline-block;" 
                        onsubmit = "return confirm('Are you sure you want to delete this doctor?');">
                            @csrf
                            
                            @method('DELETE')
                            <button type="submit" class = "btn btn-sm btn-danger">Delete</button>
                          </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
         <div class="btn btn-primary">
        <a href="{{ route('admin.doctor.create') }}" style="color:white; text-decoration: none;">Add Doctor</a>
    </div>
    </div>
    @endsection
