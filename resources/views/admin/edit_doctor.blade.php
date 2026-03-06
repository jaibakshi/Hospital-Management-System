@extends('layouts.main')
@section('content')

<form method = "POST" action = "{{ route('admin.doctor.update', $doctor->id) }}">
    @csrf
    @method('PUT')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Edit Doctor</h2>
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $doctor->user->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $doctor->user->email }}" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $doctor->user->phone }}">
                </div>

                <div class="mb-3">
                     <label for="department" class="form-label">Department</label>
                                <select class="form-select" id="department" name="department_id" required>
                                    <option value="{{ $doctor->department_id }}">{{ $doctor->department->name }}</option>
                                    @foreach($departments as $dept)
                                        <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                        @endforeach
                                </select>
                </div>

                <div class="mb-3">
                    <label for="specialty" class="form-label">Specialty</label>
                    <input type="text" class="form-control" id="specialty" name="specialization" value="{{ $doctor->specialization }}">
                </div>
                <div class="mb-3">
                    <label for="opd_end" class="form-label">OPD_END</label>
                    <input type="time" class="form-control" id="opd_end" name="opd_end" value="{{ $doctor->opd_end }}">
                </div>

                <div class="mb-3">
                    <label for="experience" class="form-label">Experience (Years)</label>
                    <input type="number" class="form-control" id="experience" name="experience" value="{{ $doctor->experience }}">
                </div>

                <div class="mb-3">
                    <label for="consultation_fee" class="form-label">Consultation Fee</label>
                    <input type="number" class="form-control" id="consultation_fee" name="consultation_fee" value="{{ $doctor->consultation_fee }}">
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Update Doctor</button>
                    <a href="#" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
