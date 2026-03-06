@extends('layouts.main')
    @section('content')
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Create Department</h2>
                <form method="POST" action="{{ route('admin.department.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Department Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter department name" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection