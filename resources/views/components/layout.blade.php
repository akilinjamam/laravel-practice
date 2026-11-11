
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | My Website</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .hero {
            min-height: 85vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.2rem;
            margin: 20px 0;
        }

        .feature-card {
            border: none;
            border-radius: 12px;
            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        footer {
            background: #212529;
            color: white;
            padding: 25px 0;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                MyWebsite
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="mx-auto max-w-5xl px-6 py-20">
        @if (session('success'))
            <div class="mb-8 rounded-lg bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-800">{{ session('success') }}<div/>
        @endif
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-0">
                &copy; {{ date('Y') }} MyWebsite. All rights reserved.
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
