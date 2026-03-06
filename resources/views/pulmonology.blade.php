@extends('layouts.usermain')
@section('content')
<think>
The user wants the pulmonology page code in one place and in proper format. Let me provide a clean, well-formatted version of the pulmonology service page.
</think> HERO BANNER SECTION -->
<section class="hero-section bg-light py-5 position-relative overflow-hidden">
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <span class="badge bg-primary-soft text-primary mb-3 px-3 py-2 rounded-pill text-uppercase fw-bold" style="background-color: #e7f1ff;">
                    Center of Excellence
                </span>
                <h1 class="display-3 fw-bold text-dark mb-4 lh-base">
                    World-Class <span class="text-primary">Pulmonology</span> Department
                </h1>
                <p class="lead text-secondary mb-4 pe-lg-5">
                    Comprehensive lung and respiratory care delivered by internationally trained pulmonologists. We combine advanced diagnostics with personalized treatment plans to help you breathe easier and live healthier.
                </p>
                <div class="d-flex gap-3">
                    <button data-bs-toggle="modal" data-bs-target="#appointmentModal"class="btn btn-primary btn-lg px-5 rounded-pill shadow-sm">
                        Book Lung Checkup
                    </button>
                    <a href="#specialists" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">
                        Meet Our Experts
                    </a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block text-center">
                <img src="https://images.unsplash.com/photo-1584515933487-779824d29609?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Pulmonology Care" class="img-fluid rounded-4 shadow-lg" style="transform: rotate(2deg); border: 10px solid #fff;">
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
                <p class="text-muted">Our multidisciplinary team provides comprehensive care for all respiratory and lung conditions, from diagnosis to rehabilitation.</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-lungs text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Interventional Pulmonology</h4>
                    <p class="text-muted mb-0">Our state-of-the-art bronchoscopy suite offers advanced minimally invasive procedures including EBUS (Endobronchial Ultrasound), stenting, and tumor ablation for precise diagnosis and treatment of lung diseases and cancers.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-wind text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Sleep Medicine</h4>
                    <p class="text-muted mb-0">We provide comprehensive sleep disorder diagnostics and treatment. Our dedicated sleep lab offers CPAP/BIPAP titration and therapy for Sleep Apnea, Insomnia, and other nocturnal breathing disorders to ensure restful sleep.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-heart-pulse text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Thoracic Oncology</h4>
                    <p class="text-muted mb-0">Our multidisciplinary oncology team provides integrated care for lung cancer and chest tumors. We offer early detection, staging, chemotherapy, targeted therapy, and minimally invasive thoracic surgery.</p>
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
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-danger">
                        <i class="bi bi-hospital-fill fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">24/7 Respiratory Emergency</h5>
                    <p class="small text-muted">Round-the-clock emergency care for acute asthma, COPD exacerbations, and respiratory failure.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-activity fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Pulmonary Function Test</h5>
                    <p class="small text-muted">Complete spirometry, DLCO, and lung volume testing for accurate diagnosis of lung capacity.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-moon-stars fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Sleep Disorder Center</h5>
                    <p class="small text-muted">Polysomnography (sleep study) and comprehensive treatment for snoring and sleep apnea.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-virus text-primary fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Allergy & Asthma Clinic</h5>
                    <p class="small text-muted">Skin prick tests, immunotherapy, and personalized asthma management plans for all ages.</p>
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
                <p class="text-muted">A team of internationally trained pulmonologists and respiratory therapists dedicated to your lung health.</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Mark Stevenson" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Mark Stevenson</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Director of Pulmonology</p>
                        <p class="text-muted small mb-4">20+ Years Experience | Interventional Pulmonologist</p>
                        <button class="btn btn-outline-primary rounded-pill px-4 w-100" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Lisa Chang" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Lisa Chang</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Sleep Medicine Specialist</p>
                        <p class="text-muted small mb-4">15+ Years Experience | Certified Sleep Physician</p>
                        <button class="btn btn-outline-primary rounded-pill px-4 w-100" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Anil Patel" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Anil Patel</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Thoracic Oncologist</p>
                        <p class="text-muted small mb-4">18+ Years Experience | Lung Cancer Specialist</p>
                        <button class="btn btn-outline-primary rounded-pill px-4 w-100" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
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
                <p class="text-muted">We invest in advanced respiratory technology to ensure accurate diagnosis and effective treatment.</p>
            </div>
            <div class="col-lg-8">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-microscope text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">EBUS Bronchoscopy</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-moon text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Sleep Lab</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-speedometer2 text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">PFT Machine</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-lungs-fill text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">High-Resolution CT</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-cpu text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">CPAP/BIPAP Devices</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-droplet text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Arterial Blood Gas Lab</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
```
@endsection