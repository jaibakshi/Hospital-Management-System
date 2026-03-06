<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>

    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>

<body>

 <div class="login-container">
        <div class="login-header">
            <h1>Reset Password</h1>
            <p>Welcome back! Please enter your new password</p>
        </div>

        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
        @endif

        <form action="/reset-password" method="POST">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div>

            <div class="form-group">
                <label class="form-label">New Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter new password" required>
            </div>

            <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" required>
            </div>

            <button type="submit" class="login-btn">
                Reset Password
            </button>

        </form>

    </div>

</div>

</body>
</html>