<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang - Konsultasi Dokter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #e9eef4;
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .welcome-card {
            display: flex;
            flex-direction: row;
            max-width: 1000px;
            width: 100%;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            background-color: #fff;
        }

        .welcome-left {
            background-image: url('https://d3ftma7dyyzt91.cloudfront.net/2022/11/22/b17e9274ee663fe3fe127cdc37cd8361bb89c392.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            width: 50%;
            min-height: 500px;
        }

        .welcome-left::before {
            content: '';
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .welcome-left-content {
            position: relative;
            color: white;
            text-align: center;
            padding: 30px;
            z-index: 1;
            top: 50%;
            transform: translateY(-50%);
        }

        .welcome-left-content h1 {
            font-size: 28px;
            font-weight: bold;
        }

        .welcome-left-content p {
            font-size: 15px;
            margin-top: 10px;
        }

        .welcome-right {
            width: 50%;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 500px;
        }

        .welcome-right h2 {
            color: #0d6efd;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .btn-group-custom {
            display: flex;
            gap: 15px;
            margin-top: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-group-custom .btn {
            padding: 10px 30px;
            font-size: 16px;
            border-radius: 30px;
            transition: 0.3s all ease-in-out;
        }

        .btn-group-custom .btn:hover {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .welcome-card {
                flex-direction: column;
                margin: 20px;
            }

            .welcome-left,
            .welcome-right {
                width: 100%;
            }

            .welcome-left {
                height: 250px;
            }

            .welcome-left-content {
                padding: 20px;
                top: 40%;
                transform: translateY(-40%);
            }
        }
    </style>
</head>
<body>

<div class="welcome-card">
    <div class="welcome-left">
        <div class="welcome-left-content">
            <h1>Selamat Datang di Aplikasi Konsultasi Dokter</h1>
            <p>Konsultasi kesehatan lebih mudah, cepat, dan nyaman.</p>
        </div>
    </div>
    <div class="welcome-right">
        <h2>Mulai Konsultasi</h2>
        <p>Silakan login untuk memulai atau daftar jika belum memiliki akun.</p>
        <div class="btn-group-custom">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
