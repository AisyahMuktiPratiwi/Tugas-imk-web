<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <style>
        /* Styles */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            justify-content: center;
            min-height: 100vh;
            background: #000000;
            display: flex;
            align-items: center;
        }

        .form {
            position: relative;
            background: #ffdb3ccc;
            overflow: hidden;
            
            box-shadow: 50px 50px 50px 50px rgb(168, 90, 0);
            border-radius: 20px;
            padding: 60px 15px;
            width: 270px;
            height: 350px;
            opacity: 70%;
        }

        .form-inner {
            position: absolute;
            top: 50%;
            left: 50%;
            background: #130e0e;
            height: 98%;
            width: 98%;
            opacity: 80%;
            transform: translate(-50%, -50%);
        }

        .content {
            width: 100%;
            padding: 25px;
            height: 100%;
        }

        .form-inner h2 {
            text-align: center;
            padding-top: 35px;
            font-size: 25px;
            color: #ffe570;
        }

        .input {
            display: block;
            padding: 12px 15px;
            border: 1.5px solid rgb(250, 238, 66);
            outline: none;
            background: #ff5c5c;
            color: white;
            width: 100%;
            border-radius: 10px;
            margin-top: 20px;
        }

        .btn {
            margin-top: 40px;
            width: 100%;
            cursor: pointer;
            color: rgb(87, 8, 8);
            border: none;
            font-size: 18px;
            border-radius: 10px;
            transition: 0.4s;
            padding: 12px;
            outline: none;
            background: #dfc800;
        }

        .btn:hover {
            background: #7e2f2f;
            color: #d9ff00;
        }

        .alert {
            background-color: #f3e303;
            color: #7e2f2f;
            border: 1.5px solid #7e2f2f;
            border-radius: 10px;
            padding: 10px 15px;
            margin-bottom: 15px;
            font-size: 14px;
            text-align: left;
            display: none;
        }
    </style>
</head>

<body>
    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="form-inner">
            <h2>LOGIN</h2>
            <div class="content">
                <!-- Alert Container -->
                <div id="alert" class="alert"></div>

                <!-- Email Input -->
                <input class="input" type="email" placeholder="Email" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                <!-- Password Input -->
                <input class="input" type="password" placeholder="Password" name="password" required
                    autocomplete="current-password">

                <!-- Submit Button -->
                <button type="submit" class="btn">Login</button>
            </div>
        </div>
    </form>

    <script>
        // Form validation
        document.querySelector('.form').addEventListener('submit', function (event) {
            let email = document.querySelector('input[name="email"]');
            let password = document.querySelector('input[name="password"]');
            let alertBox = document.getElementById('alert');
            let messages = [];

            // Clear previous messages
            alertBox.style.display = 'none';
            alertBox.innerHTML = '';

            // Validate email
            if (!email.value) {
                messages.push("Email harus diisi.");
            } else if (!/\S+@\S+\.\S+/.test(email.value)) {
                messages.push("Email tidak valid.");
            }

            // Validate password
            if (!password.value) {
                messages.push("Password harus diisi.");
            }

            // Show error messages
            if (messages.length > 0) {
                event.preventDefault(); // Prevent form submission
                alertBox.style.display = 'block';
                alertBox.innerHTML = messages.map(msg => `<p>${msg}</p>`).join('');
            }
        });
    </script>
</body>

</html>
<script>
    // Form validation
    document.querySelector('.form').addEventListener('submit', function (event) {
        let email = document.querySelector('input[name="email"]');
        let password = document.querySelector('input[name="password"]');
        let alertBox = document.getElementById('alert');
        let messages = [];

        
        alertBox.style.display = 'none';
        alertBox.innerHTML = '';

        // Validate email
        if (!email.value) {
            messages.push("Email harus diisi.");
        } else if (!/\S+@\S+\.\S+/.test(email.value)) {
            messages.push("Email tidak valid.");
        }

        // Validate password
        if (!password.value) {
            messages.push("Password harus diisi.");
        }

        // Show error messages
        if (messages.length > 0) {
            event.preventDefault(); // Prevent form submission
            alertBox.style.display = 'block';
            alertBox.innerHTML = messages.map(msg => `<p>${msg}</p>`).join('');
        }
    });

    // Display server-side validation errors
    window.addEventListener('DOMContentLoaded', () => {
        let serverError = `@if($errors->any()) {{ $errors->first() }} @endif`.trim();
        if (serverError) {
            let alertBox = document.getElementById('alert');
            alertBox.style.display = 'block';
            alertBox.innerHTML = `<p>${serverError}</p>`;
        }
    });
</script>
