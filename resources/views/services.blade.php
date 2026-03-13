@extends('layouts.usermain')
@section('content')
<style>
/* General Styling */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    background-color: #f4f7f6;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 50px 20px;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    color: #004a99; /* Medical Blue */
    margin-bottom: 10px;
}

.section-subtitle {
    text-align: center;
    color: #666;
    margin-bottom: 50px;
}

/* Services Grid */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

/* Service Card */
.service-card {
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.service-card h3 {
    color: #004a99;
    margin-bottom: 15px;
    font-size: 1.5rem;
}

.service-card p {
    color: #555;
    line-height: 1.6;
    font-size: 1rem;
}

/* Responsive adjustment */
@media (max-width: 768px) {
    .section-title {
        font-size: 2rem;
    }
}
a{
    all:unset;
}



</style>

<section class="services-section">
    <div class="container">
        <h2 class="section-title">Our Medical Services</h2>
        <p class="section-subtitle">Providing world-class healthcare with a compassionate touch.</p>

<section class="py-5 doctor-card" id="services">
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row g-4">   
                <div class="col-md-6 col-lg-4 ">
                    <div class="service-card">
                        <i class="fas fa-heartbeat doctor-logo"></i>
                        <a href="/hospital/cardiology">
                        <h5 class="doctor-name">Cardiology</h5>
                        <p class="doctor-info">Expert cardiac care and treatment</p>
                    </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-brain doctor-logo"></i>
                        <a href="/hospital/neurology">
                        <h5 class="doctor-name">Neurology</h5>
                        <p class="doctor-info">Advanced neurological treatments</p>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-tooth doctor-logo"></i>
                        <a href="/hospital/dentistry">
                        <h5 class="doctor-name">Dentistry</h5>
                        <p class="doctor-info">Complete dental care services</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-eye doctor-logo"></i>
                        <a href="/hospital/ortho">
                        <h5 class="doctor-name">Ophthalmology</h5>
                        <p class="doctor-info">Eye care and vision correction</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-lungs doctor-logo"></i>
                        <a href="/hospital/pulmonology">
                        <h5 class="doctor-name">Pulmonology</h5>
                        <p class="doctor-info">Respiratory & lung treatment</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card">
                        <i class="fas fa-pills doctor-logo"></i>
                        <a href="/hospital/pharmacy">
                        <h5 class="doctor-name">Pharmacy</h5>
                        <p class="doctor-info">Full pharmaceutical services</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- 
        <div class="services-grid">
            <div class="service-card">
                <div class="icon">🚑</div>
                <h3>Emergency Care</h3>
                <p>24/7 trauma and emergency services with a dedicated rapid response team.</p>
            </div>

            <div class="service-card">
                <div class="icon">❤️</div>
                <h3>Cardiology</h3>
                <p>Expert heart care including diagnostics, surgery, and post-op rehabilitation.</p>
            </div>

            <div class="service-card">
                <div class="icon">👶</div>
                <h3>Pediatrics</h3>
                <p>Specialized healthcare for infants and children in a friendly environment.</p>
            </div>

            <div class="service-card">
                <div class="icon">🔬</div>
                <h3>Diagnostics</h3>
                <p>State-of-the-art lab and imaging services (MRI, CT, X-Ray) for accurate results.</p>
            </div>

            <div class="service-card">
                <div class="icon">👩‍⚕️</div>
                <h3>Gynecology</h3>
                <p>Comprehensive care for women’s health, maternity, and wellness.</p>
            </div>

            <div class="service-card">
                <div class="icon">🏥</div>
                <h3>In-Patient Care</h3>
                <p>Comfortable recovery rooms with round-the-clock nursing and support.</p>
            </div>
        </div>
    </div> -->
</section>
@endsection