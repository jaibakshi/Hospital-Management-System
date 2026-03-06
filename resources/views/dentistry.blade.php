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
                    World-Class <span class="text-primary">Dentistry</span> Department
                </h1>
                <p class="lead text-secondary mb-4 pe-lg-5" >
                    Comprehensive dental care powered by cutting-edge technology and a team of internationally trained dentists. We are committed to giving you a healthy, beautiful smile with personalized and pain-free treatments.
                </p>
                <div class="d-flex gap-3">
                    <button class="btn btn-primary btn-lg px-5 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        Book Dental Checkup
                    </button>
                    <a href="#specialists" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">
                        Meet Our Experts
                    </a>
                </div>
            </div>
            <!-- Visual Element -->
            <div class="col-lg-5 d-none d-lg-block text-center">
                <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Dentistry Care" 
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
                <p class="text-muted">Our multidisciplinary dental team provides comprehensive care across all aspects of oral health, from routine checkups to complex surgeries.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Expertise 1 -->
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-person-lines-fill text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Oral & Maxillofacial Surgery</h4>
                    <p class="text-muted mb-0">
                        Our expert surgeons perform complex procedures including wisdom tooth extraction, dental implants, jaw correction surgery, and treatment for oral cancers with minimal downtime and maximum precision.
                    </p>
                </div>
            </div>
            
            <!-- Expertise 2 -->
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-stars text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Cosmetic Dentistry</h4>
                    <p class="text-muted mb-0">
                        Achieve the perfect smile with our advanced cosmetic treatments. We specialize in porcelain veneers, professional teeth whitening, smile designing, and Invisalign clear aligners for a flawless smile.
                    </p>
                </div>
            </div>
            
            <!-- Expertise 3 -->
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-emoji-smile text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Pediatric Dentistry</h4>
                    <p class="text-muted mb-0">
                        Specialized dental care for infants, children, and teenagers. Our child-friendly environment ensures preventive care, fluoride treatments, and orthodontic assessments in a comfortable setting.
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
                    <div class="mb-4 text-primary">
                        <i class="bi bi-file-medical-fill fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Dental Implants</h5>
                    <p class="small text-muted">Permanent tooth replacement solutions using world-class implant systems for a natural look and feel.</p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-bezier2 fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Orthodontics</h5>
                    <p class="small text-muted">Traditional braces and invisible aligners (Invisalign) to correct misaligned teeth and bite issues.</p>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-droplet-fill fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Root Canal Treatment</h5>
                    <p class="small text-muted">Painless endodontic therapy using rotary instruments and apex locators to save infected teeth.</p>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-brush fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Teeth Whitening</h5>
                    <p class="safe text-muted">Professional zoom whitening and laser bleaching for a brighter, whiter smile in just one session.</p>
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
                <p class="text-muted">A team of internationally trained dentists and oral surgeons dedicated to your oral health and perfect smile.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Doctor 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Amanda Lewis" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Amanda Lewis</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Head of Cosmetic Dentistry</p>
                        <p class="text-muted small mb-4">15+ Years Experience | Smile Design Expert</p>
                        <button class="btn btn-outline-primary rounded-pill px-4 w-100" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                    </div>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Michael Scott" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Michael Scott</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Oral & Maxillofacial Surgeon</p>
                        <p class="text-muted small mb-4">18+ Years Experience | Implant Specialist</p>
                        <button class="btn btn-outline-primary rounded-pill px-4 w-100"  data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1651008376811-b90baee60c1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Priya Sharma" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Priya Sharma</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Pediatric Dentist</p>
                        <p class="text-muted small mb-4">12+ Years Experience | Child Dental Care</p>
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
                <p class="text-muted">We invest in the latest dental technology to ensure precise diagnostics and comfortable treatments.</p>
            </div>
            <div class="col-lg-8">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-camera text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">3D CT Scan</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-disc text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Digital X-Ray</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-lightning-charge text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Laser Dentistry</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-speaker text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Intraoral Scanner</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-watch text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">CAD/CAM Crowns</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-emoji-sunglasses text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Zoom Whitening</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection