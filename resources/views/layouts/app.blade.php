<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'VendorRisk')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @stack('styles')
</head>
<body class="bg-light">

<div class="container-fluid">
    <div class="row">
        @include('partials.sidebar')

        <main class="col-md-9 col-lg-10 px-md-4 py-3">
            @include('partials.header')
            @yield('content')
        </main>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery (only if needed later) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
