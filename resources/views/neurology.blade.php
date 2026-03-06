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
                    World-Class <span class="text-primary">Neurology</span> Department
                </h1>
                <p class="lead text-secondary mb-4 pe-lg-5">
                    Advanced neurological care for brain, spine, and nervous system disorders. Our team of renowned neurologists and neurosurgeons combines cutting-edge technology with compassionate care to deliver optimal outcomes.
                </p>
                <div class="d-flex gap-3">
                    <button  class="btn btn-primary btn-lg px-5 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                        Book Neuro Checkup
                    </button>
                    <a href="#specialists" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">
                        Meet Our Experts
                    </a>
                </div>
            </div>
            <!-- Visual Element -->
            <div class="col-lg-5 d-none d-lg-block text-center">
                <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Neurology Care" 
                     class="img-fluid rounded-4 shadow-lg" 
                     style="transform: rotate(-2deg); border: 10px solid #fff;">
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
                <p class="text-muted">Our multidisciplinary team provides comprehensive care for complex neurological conditions, from diagnosis to rehabilitation.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Expertise 1 -->
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-brain text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Neurointervention</h4>
                    <p class="text-muted mb-0">
                        Our state-of-the-art neuro-cath lab offers minimally invasive treatments for stroke, brain aneurysms, and arteriovenous malformations (AVM). We provide 24/7 thrombectomy services for acute ischemic strokes.
                    </p>
                </div>
            </div>
            
            <!-- Expertise 2 -->
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-person-wheelchair text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Movement Disorders</h4>
                    <p class="text-muted mb-0">
                        Specialized care for Parkinson's disease, tremors, and dystonia. We offer comprehensive neurological rehabilitation, botox injections, and Deep Brain Stimulation (DBS) programming for advanced cases.
                    </p>
                </div>
            </div>
            
            <!-- Expertise 3 -->
            <div class="col-md-4">
                <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                    <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block">
                        <i class="bi bi-emoji-dizzy text-primary fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Epilepsy & Sleep Medicine</h4>
                    <p class="text-muted mb-0">
                        Our Level 4 Epilepsy Center provides advanced video-EEG monitoring for precise seizure diagnosis. We also offer comprehensive sleep disorder treatments for insomnia, sleep apnea, and narcolepsy.
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
                        <i class="bi bi-clock-history fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">24/7 Stroke Emergency</h5>
                    <p class="small text-muted">Dedicated stroke unit with round-the-clock thrombolysis and mechanical thrombectomy capabilities.</p>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-cpu fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Neurosurgery</h5>
                    <p class="small text-muted">Advanced brain and spine surgeries including tumor resection, laminectomy, and spinal fusion.</p>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-diagram-3 fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Neurology Diagnostics</h5>
                    <p class="small text-muted">EMG, NCV, EEG, Evoked Potentials, and CSF analysis for accurate neurological diagnosis.</p>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                    <div class="mb-4 text-primary">
                        <i class="bi bi-chat-heart fs-1"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Neurorehabilitation</h5>
                    <p class="small text-muted">Comprehensive physical, occupational, and speech therapy for post-stroke and injury recovery.</p>
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
                <p class="text-muted">A team of internationally trained neurologists and neurosurgeons dedicated to your brain and spine health.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Doctor 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Robert Chen" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Robert Chen</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Director of Neurointervention</p>
                        <p class="text-muted small mb-4">18+ Years Experience | Stanford Fellowship</p>
                        <button class="btn btn-outline-primary rounded-pill px-4 w-100" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                    </div>
                </div>
            </div>

            <!-- Doctor 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Emily Roberts" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Emily Roberts</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Senior Consultant Neurologist</p>
                        <p class="text-muted small mb-4">15+ Years Experience | Epilepsy Specialist</p>
                        <button class="btn btn-outline-primary rounded-pill px-4 w-100" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Dr. Vikram Malhotra" style="height: 300px; object-fit: cover;">
                    <div class="card-body p-4 text-center">
                        <h5 class="fw-bold mb-1">Dr. Vikram Malhotra</h5>
                        <p class="text-primary small fw-bold text-uppercase mb-3">Head of Neurosurgery</p>
                        <p class="text-muted small mb-4">22+ Years Experience | Complex Spine Surgery</p>
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
                <h2 class="fw-bold text-dark">Advanced Technology</h2>
                <p class="text-muted">We utilize cutting-edge neuroimaging and surgical equipment to ensure precise diagnosis and treatment.</p>
            </div>
            <div class="col-lg-8">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-hospital text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">3T MRI</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-layers-half text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">128-Slice CT</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-wifi text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Digital Subtraction Angiography</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-cpu-fill text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Intraoperative Neuromonitoring</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-broadcast text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Video EEG</h6>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm">
                            <i class="bi bi-chat-dots text-primary fs-2 me-3"></i>
                            <h6 class="mb-0 fw-bold">Neuronavigation System</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection