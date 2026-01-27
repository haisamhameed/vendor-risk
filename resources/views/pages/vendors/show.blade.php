@extends('layouts.app')

@section('title', 'Vendor Details')

@section('content')
<div class="card">
    <h3>ABC Corp</h3>

    <p>Overall Risk:
        <span class="badge badge-high">High</span>
    </p>

    <ul>
        <li>ISO Certified ❌</li>
        <li>Data Encryption ✅</li>
        <li>Expired Contract ❌</li>
    </ul>
</div>
@endsection
