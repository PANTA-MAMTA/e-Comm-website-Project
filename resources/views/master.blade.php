<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF TOKEN (Fixes 419 error) -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-Comm Project</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <style>
        .custom-login {
            height: 500px;
            padding-top: 100px;
        }
        img.slider-img {
            height: 400px !important;
        }
        .carousel-caption {
            background-color: rgba(0,0,0,0.5);
            padding: 10px;
            border-radius: 4px;
        }
        .trending-image {
            height: 150px;
        }
        .trending-item {
            float: left;
            width: 20%;
            padding: 10px;
            text-align: center;
        }
        .trending-wrapper {
            margin: 30px;
        }
        .search-box {
            width: 500px !important;
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    @include('header')

    <!-- CONTENT -->
    <div>
        @yield('content')
    </div>

    <!-- FOOTER -->
    @include('footer')

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- OPTIONAL: Setup CSRF for AJAX -->
    <script>
        // This makes sure all AJAX requests send the CSRF token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>
</html>
