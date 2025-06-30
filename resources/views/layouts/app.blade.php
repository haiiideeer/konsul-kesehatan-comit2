<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Konsultasi Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #0d6efd;
            color: #fff;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #0b5ed7;
            border-radius: 4px;
        }
        .sidebar .nav-link.active {
            background-color: #0b5ed7;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 sidebar d-flex flex-column p-3">
            @include('components.sidebar')
        </nav>
        <main class="col-md-10 p-0">
            @include('components.navbar')
            <div class="container mt-4">
                @yield('content')
            </div>
        </main>
    </div>
</div>
</body>
</html>
