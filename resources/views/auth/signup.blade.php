<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - VendorRisk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-light">

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-sm p-4" style="width: 360px;">
        <h3 class="text-center mb-4">Sign Up</h3>

        <form method="POST" action="#">
            @csrf

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="John Doe" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="you@example.com" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="••••••" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="password" class="form-control" placeholder="••••••" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        </form>

        <p class="mt-3 text-center">
            Already have an account? <a href="{{ route('login') }}">Sign In</a>
        </p>
    </div>
</div>

</body>
</html>
