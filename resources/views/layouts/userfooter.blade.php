    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-3 mb-4">
                    <h6>About HMS</h6>
                    <p>Providing quality healthcare services since 1998.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h6>Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">About Us</a></li>
                        <li><a href="#" class="footer-link">Services</a></li>
                        <li><a href="#" class="footer-link">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <h6>Contact Info</h6>
                    <p>
                        📞 +1 234 567 8900<br>
                        📧 info@hms.com
                    </p>
                </div>
                <div class="col-md-3 mb-4">
                    <h6>Follow Us</h6>
                    <a href="#" class="footer-link me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="footer-link me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="footer-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <hr class="bg-secondary">
            <p class="text-center  mb-0">&copy; 2024 Hospital Management System. All rights reserved.</p>
        </div>
    </footer>
    
    <!-- Appointment Modal -->
    <div class="modal fade" id="appointmentModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="alert alert-info">
                            <strong>Welcome,{{auth()->user()->name }}!</strong><br>
                            Book your appointment easily using the form below
                    </div>
                    <!-- <h5 class="modal-title">Book an Appointment</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                
                <div class="modal-body">
                    <form method="POST" action = "{{ url('/appointments') }}">
                        @if(session('error'))
                            <div class = "alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <select class="form-select" id="department" name="department_id" required>
                                
                                <option>Select Department</option>
                                @if(isset($departments))
                                @foreach($departments as $dept)
                                    <option value="{{ $dept->id }}">{{ $dept->name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                           <label class="form-label">Doctor</label>
                           <select class="form-select" id="doctor" name="doctor_id" required>
                            <option value="">Select Doctor</option> 
                             </select>
                        </div>

                    <div class="mb-3">
                        <label for="appointment_date" class="form-lable">Select Date</label>
                        <br>
                             <input type="date" id="appointment_date" name="appointment_date" min="{{ date('Y-m-d') }}" required>
                        </div>

                    <div class="mb-3">
                       <!--<div id="slots"></div>
                        </div> -->
                            <label class="form-label">Time</label>
                            <div class="form-control" name="appointment_time" id="slots" required>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Book Appointment</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    @if(session('error') || session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var myModal = new bootstrap.Modal(document.getElementById('appointmentModal'));
        myModal.show();
    });
</script>
@endif
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/appointment.js') }}"></script>