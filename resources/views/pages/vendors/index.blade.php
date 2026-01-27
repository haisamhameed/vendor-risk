@extends('layouts.app')

@section('title', 'Vendors')
@section('page-title', 'Vendors')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between mb-3">
            <h5>Vendors</h5>
            <a href="{{ route('vendors.create') }}" class="btn btn-primary">
                Add Vendor
            </a>
        </div>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Risk</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>ABC Corp</td>
                <td><span class="badge bg-danger">High</span></td>
                <td>Active</td>
                <td><a href="{{ route('vendors.show', 1) }}">View</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
