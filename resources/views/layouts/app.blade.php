<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Vendor Risk')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap (CDN for now) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
        }
        .sidebar {
            width: 260px;
            background: #0d6efd;
            min-height: 100vh;
        }
        .sidebar a {
            color: rgba(255,255,255,.8);
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            border-radius: 8px;
            margin-bottom: 4px;
        }
        .sidebar a.active,
        .sidebar a:hover {
            background: rgba(255,255,255,.15);
            color: #fff;
        }
        .topbar {
            height: 64px;
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
        }
    </style>

    @stack('styles')
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <aside class="sidebar p-4">
        <h4 class="text-white fw-bold mb-4">Vendor Risk</h4>

        <nav>
            <a href="#" class="active">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
            <a href="#">
                <i class="bi bi-building me-2"></i> Vendors
            </a>
            <a href="#">
                <i class="bi bi-shield-check me-2"></i> Risk Assessments
            </a>
            <a href="#">
                <i class="bi bi-file-earmark-text me-2"></i> Documents
            </a>
            <a href="#">
                <i class="bi bi-people me-2"></i> Users
            </a>
            <a href="#">
                <i class="bi bi-gear me-2"></i> Settings
            </a>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex-grow-1">

        <!-- TOP BAR -->
        <header class="topbar d-flex align-items-center justify-content-between px-4">
            <h6 class="mb-0 fw-semibold">@yield('page-title')</h6>

            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
                   data-bs-toggle="dropdown">
                    <span class="me-2 fw-semibold">{{ auth()->user()->name ?? 'Guest' }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <main class="p-4">
            @yield('content')
        </main>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')

</body>
</html>
