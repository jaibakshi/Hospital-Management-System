
 @extends('layouts.main')
    @section('content')
        <!-- Content Area -->
        <div class="content-area">
            <h1 class="page-title">Dashboard</h1>

            <!-- Stat Cards Row -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card">
                        <div class="stat-icon doctors">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <div class="stat-number">{{ $total_doctor }}</div>
                        <div class="stat-label">Total Doctors</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card">
                        <div class="stat-icon patients">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-number">{{ $total_patient }}</div>
                        <div class="stat-label">Total Patients</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card">
                        <div class="stat-icon appointments">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="stat-number">{{ $total_appointment }}</div>
                        <div class="stat-label">Total Appointments</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="stat-card">
                        <div class="stat-icon today">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-number">{{ $today_appointment }}</div>
                        <div class="stat-label">Today's Appointments</div>
                    </div>
                </div>
            </div>

            <!-- Recent Appointments Table -->
            <div class="table-section">
                <h5>Recent Appointments</h5>
                <table class="table-custom">
                    <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Doctor</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>Dr. Sarah Johnson</td>
                            <td>2024-01-15</td>
                            <td>10:30 AM</td>
                            <td><span class="status-badge status-completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>Dr. Michael Chen</td>
                            <td>2024-01-15</td>
                            <td>02:00 PM</td>
                            <td><span class="status-badge status-pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Robert Wilson</td>
                            <td>Dr. Emily Davis</td>
                            <td>2024-01-14</td>
                            <td>11:15 AM</td>
                            <td><span class="status-badge status-completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Lisa Anderson</td>
                            <td>Dr. James Martinez</td>
                            <td>2024-01-14</td>
                            <td>03:45 PM</td>
                            <td><span class="status-badge status-cancelled">Cancelled</span></td>
                        </tr>
                        <tr>
                            <td>David Brown</td>
                            <td>Dr. Sarah Johnson</td>
                            <td>2024-01-13</td>
                            <td>09:30 AM</td>
                            <td><span class="status-badge status-completed">Completed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
  
</body>
</html>