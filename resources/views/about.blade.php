@extends('layouts.usermain')
@section('content')
<section id="about" class="py-5">
  <div class="container my-5">
    <div class="row align-items-center">
      
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="position-relative">
          <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80" 
               class="img-fluid rounded-4 shadow-lg" alt="Hospital Building">
          <div class="bg-primary text-white p-3 rounded-3 position-absolute bottom-0 start-0 m-3 shadow">
            <h4 class="fw-bold mb-0">25+</h4>
            <small>Years of Excellence</small>
          </div>
        </div>
      </div>

      <div class="col-lg-6 ps-lg-5">
        <h6 class="text-primary text-uppercase fw-bold mb-2">About Our Hospital</h6>
        <h2 class="display-5 fw-bold mb-4">Your Health Is Our Top Priority</h2>
        <p class="lead mb-4">
          Our hospital is a leading multi-specialty healthcare provider, dedicated to delivering world-class medical services with compassion and advanced technology.
        </p>
        
        <ul class="list-unstyled mb-4 text-dark">
          <p class="lead mb-4"> 24/7 Emergency & Ambulance Services</p>
          <p class="lead mb-4"> Team of Highly Experienced Specialist Doctors</p>
          <p> Modern Diagnostics & Advanced Operation Theatres</p>
        </ul>

        <div class="d-flex gap-3 mt-4">
          <button data-bs-toggle="modal" data-bs-target="#appointmentModal" class="btn btn-primary btn-lg px-4 shadow">Book Appointment</button>
          <a href="#services" class="btn btn-outline-dark btn-lg px-4">Explore Services</a>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection