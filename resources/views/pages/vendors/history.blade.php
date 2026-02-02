@extends('layouts.app')

@section('title', 'Vendor Risk History')

@section('content')
<div class="container my-5">

    {{-- Header --}}
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h2 class="h3 fw-bold">Vendor Risk History</h2>
        <a href="{{ route('vendors.index') }}" class="btn btn-outline-secondary">Back to Vendors</a>
    </div>

    {{-- Timeline --}}
    <ul class="timeline list-unstyled">
        {{-- Example Entry --}}
        <li class="mb-4 position-relative ps-5">
            <span class="position-absolute top-0 start-0 translate-middle bg-primary rounded-circle" style="width: 20px; height: 20px;"></span>
            <div class="card shadow-sm rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0 fw-semibold">Assessment: Annual Security Review</h5>
                        <span class="badge bg-danger">High Risk</span>
                    </div>
                    <p class="text-muted mb-1">Completed on: 2026-01-15</p>
                    <a href="#" class="btn btn-sm btn-outline-primary mt-2">View Details</a>
                </div>
            </div>
        </li>

        <li class="mb-4 position-relative ps-5">
            <span class="position-absolute top-0 start-0 translate-middle bg-success rounded-circle" style="width: 20px; height: 20px;"></span>
            <div class="card shadow-sm rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="mb-0 fw-semibold">Document Uploaded: Security Assessment.xlsx</h5>
                        <span class="badge bg-warning text-dark">Security</span>
                    </div>
                    <p class="text-muted mb-1">Uploaded on: 2026-01-10</p>
                    <a href="#" class="btn btn-sm btn-outline-success mt-2">Download</a>
                </div>
            </div>
        </li>

        {{-- Add more entries dynamically --}}
    </ul>

</div>

{{-- Custom timeline styles --}}
<style>
.timeline li::before {
    content: '';
    position: absolute;
    top: 10px;
    left: 9px;
    width: 2px;
    height: 100%;
    background: #dee2e6;
}
</style>

@endsection
