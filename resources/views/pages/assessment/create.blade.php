@extends('layouts.app')

@section('title', 'New Risk Assessment')

@section('content')
<div class="container my-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h3">New Risk Assessment</h2>
            <p class="text-muted">Vendor: ABC Ltd</p>
        </div>
        <a href="#" class="btn btn-primary">Start Assessment</a>
    </div>

    {{-- Form --}}
    <form class="bg-white p-4 rounded shadow-sm">
        <div class="mb-3">
            <label class="form-label">Assessment Title</label>
            <input type="text" class="form-control" placeholder="e.g. Annual Security Review">
        </div>

        <div class="mb-3">
            <label class="form-label">Assessment Type</label>
            <select class="form-select">
                <option>Security</option>
                <option>Compliance</option>
                <option>Operational</option>
                <option>Financial</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea rows="3" class="form-control" placeholder="Optional notes about this assessment..."></textarea>
        </div>

        <div class="d-flex justify-content-end gap-2">
            <a href="#" class="btn btn-outline-secondary">Cancel</a>
            <button class="btn btn-primary">Start Assessment</button>
        </div>
    </form>

</div>
@endsection
