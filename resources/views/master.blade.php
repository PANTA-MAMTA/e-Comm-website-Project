<!DOCTYPE html>
<html>
<head>
    <title>E-Comm Project</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

    {{ View::make('header') }}

    <div>
        @yield('content')
    </div>

    {{ View::make('footer') }}

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
