<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar { background-color: #2c3e50; min-height: 100vh; padding: 20px 0; }
        .sidebar a { color: #ecf0f1; text-decoration: none; padding: 15px 20px; display: block; }
        .sidebar a:hover { background-color: #34495e; }
        .card { border: none; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .stat-card { text-align: center; padding: 20px; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">

        @include('layouts.doctorsidebar')
        @include('layouts.doctornavbar')
        @yield('content')



  </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>