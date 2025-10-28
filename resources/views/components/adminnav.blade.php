<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Optional: your app CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        /* Modern Navbar Custom Styles */
        .navbar {
            background: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-radius: 12px;
            padding: 0.6rem 1rem;
        }

        .navbar .nav-link {
            color: #555;
            font-weight: 500;
            transition: 0.3s;
        }

        .navbar .nav-link:hover {
            color: #0d6efd;
        }

        .navbar .navbar-brand {
            font-weight: 700;
            color: #0d6efd;
            font-size: 1.3rem;
        }

        .btn-logout {
            background: linear-gradient(90deg, #ff4b2b, #ff416c);
            color: white;
            font-weight: 600;
            border-radius: 50px;
            padding: 0.35rem 1.2rem;
            transition: 0.3s;
        }

        .btn-logout:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .navbar-nav .nav-item+.nav-item {
            margin-left: 1rem;
        }

        @media (max-width: 992px) {
            .navbar {
                border-radius: 0;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
                <i class="bi bi-speedometer2 me-1"></i> Admin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/dashboard') }}"><i class="bi bi-house-door-fill me-1"></i>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/wisdoms') }}"><i class="bi bi-lightbulb-fill me-1"></i>Wisdom</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/articles') }}"><i class="bi bi-journal-text me-1"></i>Articles</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('admin/videos') }}"><i class="bi bi-camera-video-fill me-1"></i>Videos</a></li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-logout ms-lg-3 mt-2 mt-lg-0">
                            <i class="bi bi-box-arrow-right me-1"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <!-- Bootstrap JS bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Optional: your app JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>