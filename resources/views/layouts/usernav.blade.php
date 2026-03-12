
    <!-- Navigation -->
        
         <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
             <div class="container">
                 <a class="navbar-brand" href="#"><i class="fas fa-hospital"></i> HMS</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                     <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/ourdoctor">Doctors</a></li>
                    <li class="nav-item"><a class="nav-link" href="/my-appointment">My Appointments</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About us</a></li>
                    <!-- <li class="nav-item"><a class="nav-link btn btn-primary text-white ms-2" href="#login">Login</a></li> -->
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link btn btn-danger text-white ms-2" style="background-color: #dc3545;">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
        <button id="darkModeToggle" class="btn btn-dark" style="width:auto; margin-left:70px; margin-right:30px;">🌙 </button>
    </nav>