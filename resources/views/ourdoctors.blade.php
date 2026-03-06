@extends('layouts.usermain')
@section('content')
<section id="doctors" class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h6 class="text-primary text-uppercase fw-bold">Our Experts</h6>
      <h2 class="display-6 fw-bold">Meet Our Professional Doctors</h2>
    </div>

    <div class="row g-4 text-center">
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Doctor">
          <div class="card-body">
            <h5 class="card-title fw-bold">Dr. James Wilson</h5>
            <p class="text-primary small fw-bold mb-2">Cardiologist</p>
            <p class="card-text text-muted small">Specialist in heart surgery and vascular treatments with 15+ years experience.</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#" class="text-primary"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="text-primary"><i class="bi bi-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Doctor">
          <div class="card-body">
            <h5 class="card-title fw-bold">Dr. Sarah Johnson</h5>
            <p class="text-primary small fw-bold mb-2">Neurologist</p>
            <p class="card-text text-muted small">Expert in brain disorders and nervous system treatments from Johns Hopkins.</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#" class="text-primary"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="text-primary"><i class="bi bi-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100">
          <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Doctor">
          <div class="card-body">
            <h5 class="card-title fw-bold">Dr. Michael Chen</h5>
            <p class="text-primary small fw-bold mb-2">Pediatrician</p>
            <p class="card-text text-muted small">Dedicated to providing the best child healthcare and newborn support.</p>
            <div class="d-flex justify-content-center gap-3">
              <a href="#" class="text-primary"><i class="bi bi-linkedin"></i></a>
              <a href="#" class="text-primary"><i class="bi bi-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection