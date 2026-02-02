@extends('layouts.app')

@section('title', 'Add Vendor')
@section('page-title', 'Add Vendor')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <h5 class="fw-semibold mb-4">Vendor Information</h5>

                <form>
                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label">Vendor Name</label>
                            <input type="text" class="form-control" placeholder="Stripe Inc.">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Vendor Email</label>
                            <input type="email" class="form-control" placeholder="contact@vendor.com">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Category</label>
                            <select class="form-select">
                                <option>Payments</option>
                                <option>Cloud</option>
                                <option>Email</option>
                                <option>Analytics</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" rows="4"
                                      placeholder="Brief description of the vendor"></textarea>
                        </div>

                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="/vendors" class="btn btn-outline-secondary me-2">
                            Cancel
                        </a>
                        <button class="btn btn-primary">
                            Save Vendor
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection
