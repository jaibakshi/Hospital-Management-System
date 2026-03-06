@extends('layouts.usermain')
@section('content')
    <!-- 1. HERO BANNER SECTION -->
    <section class="hero-section bg-light py-5 position-relative overflow-hidden">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-7"> <span
                        class="badge bg-primary-soft text-primary mb-3 px-3 py-2 rounded-pill text-uppercase fw-bold"
                        style="background-color: #e7f1ff;"> Center of Excellence </span>
                    <h1 class="display-3 fw-bold text-dark mb-4 lh-base"> World-Class <span
                            class="text-primary">Orthopedics</span> Department </h1>
                    <p class="lead text-secondary mb-4 pe-lg-5"> Advanced bone, joint, and spine care delivered by
                        internationally trained orthopedic surgeons. We combine cutting-edge technology with personalized
                        treatment plans to restore your mobility and quality of life. </p>
                    <div class="d-flex gap-3"> <button class="btn btn-primary btn-lg px-5 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                            Book Ortho Checkup </a> <a href="#specialists"
                            class="btn btn-outline-secondary btn-lg px-4 rounded-pill"> Meet Our Experts </a> </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block text-center"> <img
                        src="https://images.unsplash.com/photo-1516549655169-df83a0774514?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                        alt="Orthopedics Care" class="img-fluid rounded-4 shadow-lg"
                        style="transform: rotate(-2deg); border: 10px solid #fff;"> </div>
            </div>
        </div>
    </section> <!-- 2. OUR EXPERTISE SECTION -->
    <section class="expertise-section py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="fw-bold text-dark mb-3">Clinical Excellence</h2>
                    <p class="text-muted">Our multidisciplinary team provides comprehensive care for all musculoskeletal
                        conditions, from sports injuries to complex spinal disorders.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                        <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block"> <i
                                class="bi bi-person-lines-fill text-primary fs-3"></i> </div>
                        <h4 class="fw-bold mb-3">Joint Replacement</h4>
                        <p class="text-muted mb-0">Our center specializes in minimally invasive and robotic-assisted joint
                            replacement surgeries for hip, knee, and shoulder. We offer rapid recovery protocols and custom
                            implants tailored to each patient's anatomy for optimal outcomes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                        <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block"> <i
                                class="bi bi-diagram-3 text-primary fs-3"></i> </div>
                        <h4 class="fw-bold mb-3">Spine Surgery</h4>
                        <p class="text-muted mb-0">We provide advanced spine care including minimally invasive discectomy,
                            spinal fusion, and deformity correction. Our surgeons utilize navigation and intraoperative
                            imaging to ensure precision and faster recovery for patients with back pain.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="h-100 p-4 border-0 shadow-sm rounded-4 bg-white">
                        <div class="icon-box bg-primary-soft rounded-circle p-3 mb-4 d-inline-block"> <i
                                class="bi bi-trophy text-primary fs-3"></i> </div>
                        <h4 class="fw-bold mb-3">Sports Medicine</h4>
                        <p class="text-muted mb-0">Our sports medicine experts provide comprehensive care for athletes of
                            all levels. We specialize in ACL reconstruction, rotator cuff repair, meniscus surgery, and
                            advanced arthroscopic procedures to get you back in the game.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- 3. SERVICES GRID SECTION -->
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
                        <div class="mb-4 text-danger"> <i class="bi bi-bandaid fs-1"></i> </div>
                        <h5 class="fw-bold mb-2">Trauma & Fracture Care</h5>
                        <p class="small text-muted">24/7 emergency care for all types of fractures, dislocations, and
                            polytrauma with advanced surgical fixation techniques.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                        <div class="mb-4 text-primary"> <i class="bi bi-display fs-1"></i> </div>
                        <h5 class="fw-bold mb-2">Arthroscopy</h5>
                        <p class="small text-muted">Keyhole surgery for knee, shoulder, hip, and ankle joints for diagnosis
                            and treatment of sports injuries.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                        <div class="mb-4 text-primary"> <i class="bi bi-hand-thumbs-up fs-1"></i> </div>
                        <h5 class="fw-bold mb-2">Hand & Upper Limb</h5>
                        <p class="small text-muted">Specialized treatment for carpal tunnel, trigger finger, tendon
                            injuries, and complex hand fractures.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                        <div class="mb-4 text-primary"> <i class="bi bi-clipboard2-pulse fs-1"></i> </div>
                        <h5 class="fw-bold mb-2">Physiotherapy</h5>
                        <p class="small text-muted">Comprehensive rehabilitation programs including post-surgical recovery,
                            pain management, and mobility restoration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- 4. MEET OUR SPECIALISTS SECTION -->
    <section id="specialists" class="specialists-section py-5 bg-white">
        <div class="container py-4">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="fw-bold text-dark mb-3">Meet Our Specialists</h2>
                    <p class="text-muted">A team of internationally trained orthopedic surgeons and sports medicine experts
                        dedicated to your bone and joint health.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100"> <img
                            src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Dr. Richard Hayes" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold mb-1">Dr. Richard Hayes</h5>
                            <p class="text-primary small fw-bold text-uppercase mb-3">Head of Joint Replacement</p>
                            <p class="text-muted small mb-4">22+ Years Experience | Robotic Surgery Expert</p> <button
                                class="btn btn-outline-primary rounded-pill px-4 w-100" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100"> <img
                            src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Dr. Suresh Kumar" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold mb-1">Dr. Suresh Kumar</h5>
                            <p class="text-primary small fw-bold text-uppercase mb-3">Spine Surgeon</p>
                            <p class="text-muted small mb-4">18+ Years Experience | Minimal Invasive Spine</p> <button
                                class="btn btn-outline-primary rounded-pill px-4 w-100" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100"> <img
                            src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            class="card-img-top" alt="Dr. Emma Wilson" style="height: 300px; object-fit: cover;">
                        <div class="card-body p-4 text-center">
                            <h5 class="fw-bold mb-1">Dr. Emma Wilson</h5>
                            <p class="text-primary small fw-bold text-uppercase mb-3">Sports Medicine Specialist</p>
                            <p class="text-muted small mb-4">15+ Years Experience | ACL & Shoulder Expert</p> <button
                                class="btn btn-outline-primary rounded-pill px-4 w-100" data-bs-toggle="modal" data-bs-target="#appointmentModal">Book Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- 5. TECHNOLOGY & FACILITIES SECTION -->
    <section class="technology-section py-5 bg-light border-top">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h2 class="fw-bold text-dark">Modern Facilities</h2>
                    <p class="text-muted">We invest in advanced orthopedic technology to ensure accurate diagnosis and
                        precise surgical outcomes.</p>
                </div>
                <div class="col-lg-8">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm"> <i
                                    class="bi bi-robot text-primary fs-2 me-3"></i>
                                <h6 class="mb-0 fw-bold">Robotic Arm Surgery</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm"> <i
                                    class="bi bi-camera text-primary fs-2 me-3"></i>
                                <h6 class="mb-0 fw-bold">C-Arm Fluoroscopy</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm"> <i
                                    class="bi bi-display text-primary fs-2 me-3"></i>
                                <h6 class="mb-0 fw-bold">Spine Navigation System</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm"> <i
                                    class="bi bi-joystick text-primary fs-2 me-3"></i>
                                <h6 class="mb-0 fw-bold">Arthroscopy Tower</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm"> <i
                                    class="bi bi-heart-pulse text-primary fs-2 me-3"></i>
                                <h6 class="mb-0 fw-bold">Computer Navigation</h6>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center p-3 bg-white rounded-4 shadow-sm"> <i
                                    class="bi bi-hospital text-primary fs-2 me-3"></i>
                                <h6 class="mb-0 fw-bold">Dedicated OT</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection