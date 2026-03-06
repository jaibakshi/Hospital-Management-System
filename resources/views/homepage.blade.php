@extends('layouts.usermain')
    @section('content')
    <style>
        a{
            all: unset;
        }
    </style>
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <h1>Welcome to Hospital Management System</h1>
            <p class="lead mb-4">Providing Excellence in Healthcare Services</p>
            <button class="btn btn-light btn-lg me-3" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                <i class="fas fa-calendar-check"></i> Book Appointment
            </button>
            <a href="#services" class="btn btn-outline-light btn-lg">Learn More</a>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Our Achievements</h2>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6">
                    <div class="stats-card">
                        <i class="fas fa-users"></i>
                        <div class="stat-number">50K+</div>
                        <p>Happy Patients</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stats-card">
                        <i class="fas fa-user-md"></i>
                        <div class="stat-number">200+</div>
                        <p>Expert Doctors</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stats-card">
                        <i class="fas fa-hospital"></i>
                        <div class="stat-number">15+</div>
                        <p>Departments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stats-card">
                        <i class="fas fa-award"></i>
                        <div class="stat-number">25+</div>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5" id="services">
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row g-4">   
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-heartbeat"></i>
                        <a href="/hospital/cardiology">
                        <h5>Cardiology</h5>
                        <p class="text-muted">Expert cardiac care and treatment</p>
                    </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-brain"></i>
                        <a href="/hospital/neurology">
                        <h5>Neurology</h5>
                        <p class="text-muted">Advanced neurological treatments</p>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-tooth"></i>
                        <a href="/hospital/dentistry">
                        <h5>Dentistry</h5>
                        <p class="text-muted">Complete dental care services</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-eye"></i>
                        <a href="/hospital/ortho">
                        <h5>Ophthalmology</h5>
                        <p class="text-muted">Eye care and vision correction</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-lungs"></i>
                        <a href="/hospital/pulmonology">
                        <h5>Pulmonology</h5>
                        <p class="text-muted">Respiratory & lung treatment</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-pills"></i>
                        <a href="/hospital/pharmacy">
                        <h5>Pharmacy</h5>
                        <p class="text-muted">Full pharmaceutical services</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light" id="testimonials">
        <div class="container">
            <h2 class="text-center mb-5">Patient Testimonials</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mt-3">Excellent service and professional staff!</p>
                        <strong>John Doe</strong>
                        <p class="text-muted mb-0">Patient</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mt-3">The best healthcare experience I had.</p>
                        <strong>Jane Smith</strong>
                        <p class="text-muted mb-0">Patient</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <div class="testimonial-star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="mt-3">Highly recommended for quality care.</p>
                        <strong>Ahmed Khan</strong>
                        <p class="text-muted mb-0">Patient</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2 class="mb-4">Ready to Book an Appointment?</h2>
            <p class="lead mb-4">Experience world-class healthcare services</p>
            <button class="btn btn-appointment btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Now
            </button>
        </div>
    </section>

    @endsection
