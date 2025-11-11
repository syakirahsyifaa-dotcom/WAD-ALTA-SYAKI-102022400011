<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CatSpace Laravel 🐾')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e3f2fd 100%);
            font-family: 'Poppins', sans-serif;
            color: #212121;
            min-height: 100vh;
        }
        .container {
            margin-top: 70px;
        }
        .cat-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 25px;
            transition: transform .2s;
        }
        .cat-card:hover {
            transform: translateY(-5px);
        }
        .btn-custom {
            background-color: #1976d2;
            color: white;
            border-radius: 10px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #0d47a1;
            color: #fff;
        }
        .cat-title {
            font-weight: 700;
            color: #1565c0;
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .paw-icon {
            color: #ff9800;
            font-size: 1.5rem;
            margin: 0 10px;
        }
        .cat-subtitle {
            font-size: 1.1rem;
            color: #555;
            margin-top: 0.5rem;
        }
        .cat-name {
            font-weight: 700;
            color: #212121;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
        }
        .cat-breed {
            color: #6c757d;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }
        .cat-card {
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
