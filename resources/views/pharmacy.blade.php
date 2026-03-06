@extends('layouts.usermain')
@section('content')

    <!-- 1. HERO SECTION WITH SLIDER STYLE -->
    <section class="pharmacy-hero position-relative overflow-hidden"
        style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); min-height: 500px;">
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <div class="col-lg-6 text-white">
                    <span class="badge bg-white text-primary mb-3 px-3 py-2 rounded-pill fw-bold">
                        <i class="bi bi-shield-check me-1"></i> Trusted by 50,000+ Patients
                    </span>
                    <h1 class="display-2 fw-bold mb-4">Your Health, <br>Our Priority</h1>
                    <p class="lead mb-4 opacity-75">Get authentic medicines, expert pharmaceutical advice, and fast home
                        delivery all in one place. Our 24/7 pharmacy ensures you never run out of essential medications.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#order" class="btn btn-light btn-lg rounded-pill px-5 shadow-sm">
                            <i class="bi bi-cart-plus me-2"></i> Order Medicine
                        </a>
                        <a href="#consult" class="btn btn-outline-light btn-lg rounded-pill px-4">
                            <i class="bi bi-chat-dots me-2"></i> Ask Pharmacist
                        </a>
                    </div>
                    <div class="mt-5 d-flex gap-4">
                        <div class="text-center">
                            <h3 class="fw-bold mb-0">50K+</h3>
                            <small>Happy Customers</small>
                        </div>
                        <div class="text-center">
                            <h3 class="fw-bold mb-0">500+</h3>
                            <small>Medicines</small>
                        </div>
                        <div class="text-center">
                            <h3 class="fw-bold mb-0">24/7</h3>
                            <small>Availability</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block text-center">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Pharmacy" class="img-fluid rounded-4 shadow-lg" style="transform: rotate(3deg);">
                        <div class="position-absolute bottom-0 start-0 bg-white p-3 rounded-4 shadow mb-4 ms-4">
                            <div class="d-flex align-items-center">
                                <div class="bg-success rounded-circle p-2 me-2">
                                    <i class="bi bi-check-lg text-white"></i>
                                </div>
                                <div>
                                    <small class="fw-bold text-dark">100% Genuine</small>
                                    <br><small class="text-muted"> Medicines</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 w-100" style="height: 50px; background: white;"></div>
    </section>

    <!-- 2. SEARCH & MEDICINE CATEGORIES -->
    <!-- <section class="py-5 bg-white mt-n1">
        <div class="container py-4">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-lg rounded-4 p-2">
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-0">
                                <i class="bi bi-search text-primary fs-5"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg border-0"
                                placeholder="Search medicines, health products, or salts...">
                            <button class="btn btn-primary px-4 rounded-3">Search</button>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-card transition">
                        <div class="rounded-circle bg-primary-soft p-3 d-inline-block mb-3">
                            <i class="bi bi-capsule text-primary fs-3"></i>
                        </div>
                        <h6 class="fw-bold">Tablets & Capsules</h6>
                        <small class="text-muted">200+ Products</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-card transition">
                        <div class="rounded-circle bg-success-subtle p-3 d-inline-block mb-3">
                            <i class="bi bi-droplet text-success fs-3"></i>
                        </div>
                        <h6 class="fw-bold">Syrups & Liquids</h6>
                        <small class="text-muted">150+ Products</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-card transition">
                        <div class="rounded-circle bg-warning-subtle p-3 d-inline-block mb-3">
                            <i class="bi bi-thermometer-half text-warning fs-3"></i>
                        </div>
                        <h6 class="fw-bold">Medical Devices</h6>
                        <small class="text-muted">100+ Products</small>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 hover-card transition">
                        <div class="rounded-circle bg-info-subtle p-3 d-inline-block mb-3">
                            <i class="bi bi-heart-pulse text-info fs-3"></i>
                        </div>
                        <h6 class="fw-bold">Healthcare Products</h6>
                        <small class="text-muted">300+ Products</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. OUR SERVICES -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <span class="text-primary fw-bold text-uppercase small">What We Offer</span>
                    <h2 class="fw-bold display-5 mt-2">Pharmacy Services</h2>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <p class="text-muted mb-0">We provide comprehensive pharmaceutical services ensuring quality care and
                        convenience for all our patients.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 bg-white">
                        <div class="d-flex align-items-start">
                            <div class="bg-primary rounded-3 p-3 me-3">
                                <i class="bi bi-truck text-white fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Fast Home Delivery</h5>
                                <p class="text-muted mb-0">Get medicines delivered to your doorstep within 2 hours. Free
                                    delivery for orders above $20.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 bg-white">
                        <div class="d-flex align-items-start">
                            <div class="bg-success rounded-3 p-3 me-3">
                                <i class="bi bi-file-earmark-text text-white fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Online Prescriptions</h5>
                                <p class="text-muted mb-0">Upload your prescription and get medicines delivered. Our
                                    pharmacists will verify and process.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 bg-white">
                        <div class="d-flex align-items-start">
                            <div class="bg-warning rounded-3 p-3 me-3">
                                <i class="bi bi-journal-check text-white fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Medicine Management</h5>
                                <p class="text-muted mb-0">Get reminders for refills and medicine schedules. Never miss a
                                    dose again.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 bg-white">
                        <div class="d-flex align-items-start">
                            <div class="bg-info rounded-3 p-3 me-3">
                                <i class="bi bi-chat-quote text-white fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Expert Consultation</h5>
                                <p class="text-muted mb-0">Speak to our experienced pharmacists about dosage, side effects,
                                    and interactions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 bg-white">
                        <div class="d-flex align-items-start">
                            <div class="bg-danger rounded-3 p-3 me-3">
                                <i class="bi bi-capsule text-white fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Compounding Services</h5>
                                <p class="text-muted mb-0">Customized medicines tailored to your specific needs. Flavoring
                                    available for children.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 bg-white">
                        <div class="d-flex align-items-start">
                            <div class="bg-secondary rounded-3 p-3 me-3">
                                <i class="bi bi-shield-check text-white fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Genuine Products</h5>
                                <p class="text-muted mb-0">100% authentic medicines sourced directly from manufacturers.
                                    Money-back guarantee.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. WHY CHOOSE US -->
    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Why Choose Us" class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-7">
                    <span class="text-primary fw-bold text-uppercase small">Why Choose Us</span>
                    <h2 class="fw-bold display-5 mt-2 mb-4">We're Committed to Your Health</h2>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-success-subtle rounded-circle p-2 me-3"
                                style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-check-lg text-success fs-5"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="fw-bold">Licensed Pharmacy</h5>
                            <p class="text-muted mb-0">Fully licensed and regulated pharmacy operating under strict
                                guidelines.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-success-subtle rounded-circle p-2 me-3"
                                style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-check-lg text-success fs-5"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="fw-bold">Expert Pharmacists</h5>
                            <p class="text-muted mb-0">Our team consists of certified pharmacists with years of experience.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <div class="bg-success-subtle rounded-circle p-2 me-3"
                                style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-check-lg text-success fs-5"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="fw-bold">Quick Delivery</h5>
                            <p class="text-muted mb-0">Fast and reliable delivery service to ensure you get your medicines
                                on time.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="bg-success-subtle rounded-circle p-2 me-3"
                                style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-check-lg text-success fs-5"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="fw-bold">Best Prices</h5>
                            <p class="text-muted mb-0">Competitive pricing on all medicines with regular discounts and
                                offers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. OUR TEAM/PHARMACISTS -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <span class="text-primary fw-bold text-uppercase small">Our Experts</span>
                    <h2 class="fw-bold display-5 mt-2">Meet Our Pharmacists</h2>
                    <p class="text-muted">Our team of certified pharmacists is here to provide you with expert advice and
                        quality care.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            class="card-img-top" alt="Pharmacist" style="height: 250px; object-fit: cover;">
                        <div class="card-body text-center py-3">
                            <h5 class="fw-bold mb-1">Dr. Sarah Johnson</h5>
                            <p class="text-primary small fw-bold mb-2">Chief Pharmacist</p>
                            <p class="text-muted small mb-2">15+ Years Experience</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle"><i
                                        class="bi bi-linkedin"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle"><i
                                        class="bi bi-twitter-x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            class="card-img-top" alt="Pharmacist" style="height: 250px; object-fit: cover;">
                        <div class="card-body text-center py-3">
                            <h5 class="fw-bold mb-1">Mr. John Davis</h5>
                            <p class="text-primary small fw-bold mb-2">Clinical Pharmacist</p>
                            <p class="text-muted small mb-2">10+ Years Experience</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="#" class="btn btn-sm btn-outline-primary rounded-circle"><i
                                        class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection