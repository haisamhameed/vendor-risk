@extends('layouts.guest')

@section('title', 'Create Account')

@section('content')
<div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="max-width: 900px; width: 100%;">
    <div class="row g-0">

        <!-- LEFT PANEL -->
        <div class="col-md-6 d-none d-md-flex bg-primary text-white p-5 align-items-center">
            <div>
                <h2 class="fw-bold mb-3">Vendor Risk</h2>
                <p class="opacity-75">
                    Create your account and start managing vendor risk with confidence.
                </p>
            </div>
        </div>

        <!-- RIGHT PANEL -->
        <div class="col-md-6 p-5 bg-white">
            <h3 class="fw-semibold mb-2">Create your account</h3>
            <p class="text-muted mb-4">It takes less than a minute</p>

            @if ($errors->any())
                <div class="alert alert-danger small">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label small">Full Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control form-control-lg"
                        placeholder="John Doe"
                        value="{{ old('name') }}"
                        required
                        autofocus
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label small">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control form-control-lg"
                        placeholder="name@company.com"
                        value="{{ old('email') }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label small">Password</label>
                    <input
                        type="password"
                        name="password"
                        class="form-control form-control-lg"
                        placeholder="••••••••"
                        required
                    >
                </div>

                <div class="mb-4">
                    <label class="form-label small">Confirm Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        class="form-control form-control-lg"
                        placeholder="••••••••"
                        required
                    >
                </div>

                <button class="btn btn-primary btn-lg w-100">
                    Create Account
                </button>
            </form>

            <div class="text-center mt-4 small">
                Already have an account?
                <a href="{{ route('login') }}" class="fw-semibold text-decoration-none">
                    Sign in
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
