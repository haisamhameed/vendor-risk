@extends('layouts.app')

@section('title', 'Vendor Profile')
@section('page-title', 'Vendor Details')

@section('content')

<!-- HEADER -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-1">Stripe Inc.</h4>
        <p class="text-muted small mb-0">payments@stripe.com</p>
    </div>

    <span class="badge bg-danger-subtle text-danger px-3 py-2">
        High Risk
    </span>
</div>

<!-- TABS -->
<ul class="nav nav-tabs mb-4">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#overview">
            Overview
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#assessments">
            Risk Assessments
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#documents">
            Documents
        </a>
    </li>
</ul>

<div class="tab-content">

    <!-- OVERVIEW -->
    <div class="tab-pane fade show active" id="overview">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Category</h6>
                        <h5 class="fw-semibold">Payments</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Status</h6>
                        <h5 class="fw-semibold text-success">Active</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Last Review</h6>
                        <h5 class="fw-semibold">12 Jan 2026</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h6 class="text-muted">Description</h6>
                        <p class="mb-0">
                            Stripe provides payment processing services for
                            online businesses worldwide.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ASSESSMENTS -->
    <div class="tab-pane fade" id="assessments">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <p class="text-muted mb-3">
                    Recent risk assessments for this vendor
                </p>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Score</th>
                            <th>Risk Level</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>12 Jan 2026</td>
                            <td>82%</td>
                            <td><span class="badge bg-danger">High</span></td>
                            <td>Completed</td>
                        </tr>
                        <tr>
                            <td>03 Oct 2025</td>
                            <td>60%</td>
                            <td><span class="badge bg-warning">Medium</span></td>
                            <td>Completed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- DOCUMENTS -->
    <div class="tab-pane fade" id="documents">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <p class="text-muted mb-3">Uploaded vendor documents</p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">
                        Contract.pdf
                        <span class="text-muted small">Uploaded 10 Jan 2026</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        SOC2_Report.pdf
                        <span class="text-muted small">Uploaded 01 Jan 2026</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

@endsection
