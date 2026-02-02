@extends('layouts.app')

@section('title', 'Document Details')

@section('content')
<div class="container my-5">

    {{-- Header --}}
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h2 class="h3 fw-bold">Document Details</h2>
        <a href="#" class="btn btn-outline-secondary">Back to Documents</a>
    </div>

    {{-- Document Card --}}
    <div class="card shadow-sm rounded mb-4">
        <div class="card-body">
            <h5 class="card-title fw-semibold">Document Name</h5>
            <p class="text-muted mb-2">Type: </p>
            <p class="text-muted mb-2">Uploaded At: </p>

            {{-- Preview / Embed if PDF or Image --}}
            <div class="my-3">
                {{-- @if(str_ends_with($document->filename, '.pdf')) --}}
                    {{-- <embed src="{{ asset('storage/' . $document->filename) }}" type="application/pdf" width="100%" height="600px"> --}}
                {{-- @elseif(str_ends_with($document->filename, '.jpg') || str_ends_with($document->filename, '.png')) --}}
                    {{-- <img src="{{ asset('storage/' . $document->filename) }}" class="img-fluid rounded" alt="{{ $document->name }}"> --}}
                {{-- @else --}}
                    <p class="text-muted">No preview available for this file type.</p>
                {{-- @endif --}}
            </div>

            {{-- Actions --}}
            <div class="d-flex gap-2">
                <a href="{{ asset('storage/') }}" class="btn btn-success">Download</a>
                <button class="btn btn-danger" onclick="if(confirm('Are you sure?')) { document.getElementById('delete-form').submit(); }">Delete</button>
            </div>

            <form id="delete-form" action="{{ route('documents.destroy', 1) }}" method="POST" class="d-none">
                @csrf
                @method('DELETE')
            </form>

        </div>
    </div>

</div>
@endsection
