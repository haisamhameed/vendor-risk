@extends('layouts.app')

@section('title', 'Risk')
@section('page-title', 'Risk Assessment')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <label class="form-label">Data Encrypted?</label>
        <select class="form-select risk">
            <option value="0">No</option>
            <option value="10">Yes</option>
        </select>

        <label class="form-label mt-3">ISO Certified?</label>
        <select class="form-select risk">
            <option value="0">No</option>
            <option value="10">Yes</option>
        </select>

        <h4 class="mt-4">Score: <span id="score">0</span></h4>
    </div>
</div>
@endsection

@push('scripts')
<script>
$('.risk').on('change', function () {
    let score = 0;
    $('.risk').each(function () {
        score += parseInt($(this).val());
    });
    $('#score').text(score);
});
</script>
@endpush
