@extends('layouts.app')

@section('title', 'Assessment Results')

@section('content')
<div class="container my-5">

    {{-- Header --}}
    <div class="mb-4">
        <h2 class="h3 fw-bold">Assessment Results</h2>
        <p class="text-muted">Vendor: ABC Ltd</p>
    </div>

    {{-- Risk Summary Card --}}
    <div class="card shadow-sm rounded mb-4">
        <div class="card-body">
            <h5 class="card-title fw-semibold">Overall Risk Level</h5>
            <div class="progress mb-2" style="height: 20px; border-radius: 10px;">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                    High
                </div>
            </div>
            <p class="card-text text-muted">Based on your answers, this vendor is considered high risk.</p>
        </div>
    </div>

    {{-- Answer Summary --}}
    <div class="card shadow-sm rounded mb-4">
        <div class="card-body">
            <h5 class="card-title fw-semibold">Question Summary</h5>

            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Does the vendor have an incident response plan?
                    <span class="badge bg-success">Yes</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Are regular security audits performed?
                    <span class="badge bg-danger">No</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Is sensitive data encrypted in transit?
                    <span class="badge bg-warning text-dark">Partial</span>
                </li>
                {{-- More answers here --}}
            </ul>
        </div>
    </div>

    {{-- Actions --}}
    <div class="d-flex justify-content-end gap-2">
        <a href="{{ route('assessments.index') }}" class="btn btn-outline-secondary">Back to Assessments</a>
        <button class="btn btn-primary">Export Report</button>
    </div>

</div>
@endsection
