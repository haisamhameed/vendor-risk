@extends('layouts.app')

@section('title', 'Vendor Documents')

@section('content')
<div class="container my-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h3 fw-bold">Vendor Documents</h2>
            <p class="text-muted">Vendor: ABC Ltd</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
            Upload Document
        </button>
    </div>

    {{-- Documents Table --}}
    <div class="card shadow-sm rounded">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Uploaded At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Vendor Agreement.pdf</td>
                        <td>Compliance</td>
                        <td>2026-01-01</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Download</a>
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Security Assessment.xlsx</td>
                        <td>Security</td>
                        <td>2026-01-10</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                            <a href="#" class="btn btn-sm btn-outline-success">Download</a>
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </td>
                    </tr>
                    {{-- More documents dynamically --}}
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- Upload Modal --}}
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="uploadModalLabel">Upload Document</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Document Name</label>
            <input type="text" class="form-control" placeholder="Enter document name">
          </div>
          <div class="mb-3">
            <label class="form-label">Document Type</label>
            <select class="form-select">
              <option>Security</option>
              <option>Compliance</option>
              <option>Financial</option>
              <option>Other</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Upload File</label>
            <input type="file" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection
