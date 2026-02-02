@extends('layouts.app')

@section('title', 'Risk Assessment')
@section('page-title', 'Risk Assessment')

@section('content')

<!-- HEADER -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-1">Stripe Inc.</h4>
        <p class="text-muted small mb-0">Assessment — 12 Jan 2026</p>
    </div>

    <span class="badge bg-danger-subtle text-danger px-3 py-2">
        High Risk
    </span>
</div>

<div class="row g-4">

    <!-- LEFT: QUESTIONS -->
    <div class="col-lg-8">
        <div class="card shadow-sm border-0">
            <div class="card-body">

                <h6 class="fw-semibold mb-3">Security & Compliance</h6>

                <div class="mb-4">
                    <label class="fw-semibold">
                        Do you store sensitive customer data?
                    </label>

                    <div class="mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1">
                            <label class="form-check-label">Yes</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="fw-semibold">
                        Is data encrypted at rest and in transit?
                    </label>

                    <div class="mt-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2">
                            <label class="form-check-label">Yes</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2">
                            <label class="form-check-label">No</label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- RIGHT: SCORE -->
    <div class="col-lg-4">
        <div class="card shadow-sm border-0">
            <div class="card-body text-center">

                <h6 class="text-muted">Risk Score</h6>
                <h1 class="fw-bold text-danger">82%</h1>

                <hr>

                <p class="small text-muted mb-3">
                    Automatically calculated based on responses
                </p>

                <button class="btn btn-primary w-100">
                    Submit Assessment
                </button>
            </div>
        </div>
    </div>

</div>

@endsection
