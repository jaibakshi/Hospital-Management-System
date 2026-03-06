@extends('layouts.usermain')
@section('content')

   <!-- ASSUMPTIONS: Bootstrap 5.3 CSS, Bootstrap Icons, and FontAwesome are loaded in your layout head -->

<!-- 1. HERO BANNER SECTION -->
<section class="hero-section bg-light py-5 position-relative overflow-hidden">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <span class="badge bg-primary-soft text-primary mb-3 px-3 py-2 rounded-pill text-uppercase fw-bold" style="background-color: #e7f1ff;">
                    Center of Excellence
                </span>
                <h1 class="display-3 fw-bold text-dark mb-4 lh-base">
                    World-Class <span class="text-primary">Cardiology</span> Department
                </h1>
                <p class="lead text-secondary mb-4 pe-lg-5">
                    Experience advanced heart care powered by cutting-edge technology and a team of globally renowned cardiologists. We are dedicated to safeguarding your heart's health with precision and compassion.
                </p>
                <div class="d-flex gap-3">
                    
                    <!-- <a href="#" > -->
                        <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        Book Heart Checkup
                        </button>
                    <!-- </a> -->
                    
                    <a href="#specialists" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">
                        Meet Our Experts
                    </a>
                </div>
            </div>
            <!-- Visual Element -->
            <div class="col-lg-5 d-none d-lg-block text-center">
                <img src="https://images.unsplash.com/photo-1559757175-5700dde675bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Cardiology Care" 
                     class="img-fluid rounded-4 shadow-lg" 
                     style="transform: rotate(2deg); border: 10px solid #fff;">
            </div>
        </div>
    </div>
</section>

<!-- 2. OUR EXPERTISE SECTION -->
<section class="expertise-section py-5 bg-white">
    <div class="container py-4">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="fw-bold text-dark mb-3">Clinical Excellence</h2>
                <p class="text-muted">Our multidisciplinary team provides comprehensive care across the entire spectrum of cardiovascular diseases.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Expertise 1 -->
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-heart-pulse-fill text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Interventional Cardiology</h4>
                    <p class="text-muted mb-0">
                        Our state-of-the-art Cath Lab offers 24/7 emergency interventions. We specialize in complex angioplasty, stenting, and transcatheter aortic valve replacement (TAVR) with minimal recovery time.
                    </p>
                </div>
            </div>
            
            <!-- Expertise 2 -->
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-activity text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Heart Failure Management</h4>
                    <p class="text-muted mb-0">
                        We provide a dedicated Heart Failure Clinic focusing on advanced diagnostics, lifestyle management, and medical therapy. Our specialists are experts in mechanical circulatory support and cardiac rehabilitation.
                    </p>
                </div>
            </div>
            
            <!-- Expertise 3 -->
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-people-fill text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Pediatric Cardiac Care</h4>
                    <p class="text-muted mb-0">
                        Our dedicated pediatric cardiology unit treats congenital heart defects from infancy to adulthood. We offer fetal echocardiography, interventional catheterization, and post-surgical follow-up care.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. SERVICES GRID SECTION -->
<section class="services-grid py-5 bg-light">
    <div class="container py-4">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="fw-bold text-dark">Our Specialized Services</h2>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Service 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-danger">
                        <i class="bi bi-hospital-fill fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">24/7 Cardiac Emergency</h5>
                    <p class="small text-muted">Round-the-clock dedicated ambulance and emergency interventional care for heart attacks.</p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-clipboard2-pulse fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Advanced Cath Lab</h5>
                    <p class="small text-muted">Digitally integrated cath labs for diagnostic angiography and peripheral interventions.</p>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-graph-up-arrow fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Non-Invasive Testing</h5>
                    <p class="small text-muted">Comprehensive diagnostics including ECG, TMT, Holter Monitoring, and Stress Echo.</p>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-heart-half fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Heart Valve Surgery</h5>
                    <p class="small text-muted">Minimally invasive and surgical repair/replacement of heart valves (Mitral, Aortic).</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. MEET OUR SPECIALISTS SECTION -->
<section id="specialists" class="specialists-section py-5 bg-white">
    <div class="container py-4">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="fw-bold text-dark mb-3">Meet Our Specialists</h2>
                <p class="text-muted">A team of internationally trained cardiologists and cardiac surgeons dedicated to your heart health.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Doctor 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. James Wilson" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. James Wilson</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Chief Interventional Cardiologist</p>
                        <p class="text-muted small mb-4">20+ Years Experience | Harvard Fellowship</p>
                        <button class="btn btn-outline-primary rounded-pill px-4 w-100"  data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                    </div>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Sarah Jenkins" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Sarah Jenkins</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Senior Consultant (Electrophysiology)</p>
                        <p class="text-muted small mb-4">15+ Years Experience | Pacemaker Expert</p>
                        <button class="btn btn-outline-primary rounded-pill px-4 w-100"  data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Arjun Kapoor" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Arjun Kapoor</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Head of Cardiac Surgery</p>
                        <p class="text-muted small mb-4">25+ Years Experience | Minimally Invasive</p>
                        <button class="btn btn-outline-primary rounded-pill px-4 w-100"  data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. TECHNOLOGY & FACILITIES SECTION -->
<section class="technology-section py-5 bg-light border-top">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <h2 class="fw-bold text-dark">Modern Facilities</h2>
                <p class="text-muted">We invest in the latest medical technology to ensure precise diagnostics and effective treatments.</p>
            </div>
            <div class="col-lg-8">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-camera text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">3D Echo</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-layers text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">64-Slice CT</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-wifi text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Digital Angiography</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection