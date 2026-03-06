<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url("https://png.pngtree.com/thumb_back/fh260/background/20240522/pngtree-abstract-blur-hospital-clinic-medical-interior-background-image_15683664.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: rgba(255,255,255,0.7);
            background-filter:blur(10px);
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
        }

        .password-group {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 12px;
            top: 38px;
            cursor: pointer;
            color: #667eea;
            font-size: 18px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s;
            margin-top: 10px;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 14px;
        }

        .footer-text a {
            color: #667eea;
            text-decoration: none;
        }

        .error {
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Account</h1>
        <form action="/registration" method="POST">
            @csrf

            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="name" required placeholder="John Doe">
                @error('fullname') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="john@example.com">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+1 (555) 123-4567">
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob">
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-group">
                    <input type="password" id="password" name="password" required placeholder="Enter password">
                    <span class="toggle-password" onclick="togglePassword('password')">👁</span>
                </div>
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>


            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <div class="password-group">
                    <input type="password" id="confirm_password" name="confirm_password" required placeholder="Confirm password">
                    <span class="toggle-password" onclick="togglePassword('confirm_password')">👁</span>
                </div>
            </div>

            <button type="submit">Register Now</button>

            <div class="footer-text">
                Already have an account? <a href="/login">Login here</a>
            </div>
        </form>
    </div>

    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            field.type = field.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>