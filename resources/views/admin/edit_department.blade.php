@extends('layouts.main')
    @section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Edit Department</h2>
                <form method="POST" action="{{ route('admin.department.update', $departments->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Department Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $departments->name) }}" required> 
                    </div>
                    <button type="submit" class="btn btn-primary">Update Department</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
