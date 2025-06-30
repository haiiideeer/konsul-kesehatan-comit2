<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        {{-- Slot untuk Header --}}
        @if (isset($header))
            <div class="mb-4">
                {{ $header }}
            </div>
        @endif

        {{-- Slot utama konten --}}
        {{ $slot }}
    </div>
</body>
</html>
