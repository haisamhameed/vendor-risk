@extends('layouts.app')

@section('title', 'Assessment Questionnaire')

@section('content')
<div class="container my-5">

    {{-- Header + Progress --}}
    <div class="mb-4">
        <h2 class="h3 fw-bold">Assessment: Annual Security Review</h2>
        <p class="text-muted">Vendor: ABC Ltd</p>
        <div class="progress mt-2" style="height: 8px; border-radius: 5px;">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 20%;"
                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <small class="text-muted">Question 1 of 5</small>
    </div>

    {{-- Questions --}}
    <div class="row g-4"> {{-- g-4 = spacing between rows --}}

        {{-- Question Card --}}
        <div class="col-12">
            <div class="card shadow-sm rounded">
                <div class="card-body">
                    <p class="fw-semibold mb-3">1. Does the vendor have an incident response plan?</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button type="button" class="btn btn-success btn-lg flex-grow-1">Yes</button>
                        <button type="button" class="btn btn-warning btn-lg flex-grow-1">Partial</button>
                        <button type="button" class="btn btn-danger btn-lg flex-grow-1">No</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card shadow-sm rounded">
                <div class="card-body">
                    <p class="fw-semibold mb-3">2. Are regular security audits performed?</p>
                    <div class="d-flex flex-wrap gap-3">
                        <button type="button" class="btn btn-success btn-lg flex-grow-1">Yes</button>
                        <button type="button" class="btn btn-warning btn-lg flex-grow-1">Partial</button>
                        <button type="button" class="btn btn-danger btn-lg flex-grow-1">No</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Navigation --}}
    <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('assessments.index') }}" class="btn btn-outline-secondary">Cancel</a>
        <button class="btn btn-primary">Submit Assessment</button>
    </div>

</div>
@endsection
