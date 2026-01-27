@extends('layouts.app')

@section('title', 'Add Vendor')

@section('content')
<div class="card">
    <h3>Add Vendor</h3>

    <form method="POST" action="#">
        @csrf

        <label>Vendor Name</label>
        <input type="text" name="name">

        <label>Criticality</label>
        <select name="criticality">
            <option>Low</option>
            <option>Medium</option>
            <option>High</option>
        </select>

        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
