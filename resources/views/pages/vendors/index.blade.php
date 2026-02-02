@extends('layouts.app')

@section('title', 'Vendors')
@section('page-title', 'Vendors')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h5 class="fw-semibold mb-1">All Vendors</h5>
        <p class="text-muted small mb-0">Manage and assess third-party vendors</p>
    </div>

    <a href="#" class="btn btn-primary">
        <i class="bi bi-plus-lg me-1"></i> Add Vendor
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">

        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Vendor</th>
                        <th>Category</th>
                        <th>Risk Level</th>
                        <th>Status</th>
                        <th>Last Review</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <div class="fw-semibold">Stripe Inc.</div>
                            <div class="text-muted small">payments@stripe.com</div>
                        </td>
                        <td>Payments</td>
                        <td>
                            <span class="badge bg-danger-subtle text-danger">
                                High
                            </span>
                        </td>
                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Active
                            </span>
                        </td>
                        <td>12 Jan 2026</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="#" class="btn btn-sm btn-outline-primary">Assess</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-semibold">AWS</div>
                            <div class="text-muted small">aws@amazon.com</div>
                        </td>
                        <td>Cloud</td>
                        <td>
                            <span class="badge bg-warning-subtle text-warning">
                                Medium
                            </span>
                        </td>
                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Active
                            </span>
                        </td>
                        <td>02 Feb 2026</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="#" class="btn btn-sm btn-outline-primary">Assess</a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="fw-semibold">Mailgun</div>
                            <div class="text-muted small">support@mailgun.com</div>
                        </td>
                        <td>Email</td>
                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Low
                            </span>
                        </td>
                        <td>
                            <span class="badge bg-secondary-subtle text-secondary">
                                Inactive
                            </span>
                        </td>
                        <td>18 Dec 2025</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="#" class="btn btn-sm btn-outline-primary">Assess</a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>
</div>

@endsection
