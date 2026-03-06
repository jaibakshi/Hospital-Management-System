@extends('layouts.main')
    @section('content')
    <style>
        .department-table{
            width: 50%;
            margin: 300px;
        }
    </style>
     <div class="main-content-view ">
       
        <table class="table table-bordered mt-3 table-striped  department-table" style="margin-bottom:20px;">
            <thead>
                <tr>
                    <th style="width: 10%;">Id</th>
                    <th style="width: 10%;">Name</th>
                    <th style="width: 10%;">Actions</th>
                </tr>
                </thead>
            <tbody>
                @foreach($departments as $index =>$department)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $department->name }}</td>
                    <td>
                        <a href="{{ route('admin.department.edit', $department->id) }}" class = "btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form action="{{ route('admin.department.destroy', $department->id) }}" method="post"   
                        style = "display:inline-block;"
                        onclick="return confirm('Are you sure you want to delete this department?')">
                            @csrf
                            @method('DELETE')
                          
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    <div class="btn btn-primary" style="margin-left: 300px; margin-top: 20px;">
        <a href="{{ route('admin.department.create') }}"  style="color:white; text-decoration: none;">Add Department</a>
    </div>
    @endsection