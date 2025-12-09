<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    {{ View::make('header') }}

    @yield('content')

    {{ View::make('footer') }}

</body>

<style>
/* LOGIN PAGE */
.custom-login{
    height: 500px;
    padding-top: 100px;
}

/* SLIDER IMAGE SIZE */
.slider-img {
    height: 300px !important;      /* Adjust image height */
    width: auto !important;
    margin: 0 auto;
    display: block;
    object-fit: contain;
}

/* CUSTOM PRODUCT CONTAINER */
.custom-product{
    min-height: 600px;
    padding-bottom: 50px;
    
    background-color: #f5f5f5;  /* light gray background */
    padding: 20px 0;

}

/* CAPTION BOX STYLE */
.carousel-caption {
    width: fit-content;
    max-width: 70%;
    margin: 0 auto;
    left: 0;
    right: 0;
    bottom: 20px;
    padding: 12px 20px;
    background: rgba(0, 0, 0, 0.50);
    border-radius: 6px;
    text-align: center !important;
}

/* CAPTION TEXT */
.carousel-caption h3, 
.carousel-caption p {
    color: #fff !important;
}

/* TRENDING ITEMS */
.trending-img{
    height: 100px;
}

.treding-item{
    float: left;
    width: 20%;
}

.treding-wrapper{
    margin:20px;
}

.detail-img{
    height: 200px;
}

.search-box{
    width: 500px !important;
}

.carousel-img {
    max-height: 450px;   /* Slightly bigger image */
    width: auto;
    max-width: 100%;
    border-radius: 10px;
    margin-bottom: 15px; /* spacing between image and caption */
}

.carousel-caption-below {
    color: #333;
    padding: 10px 0;
}

.carousel-caption-below h3 {
    font-weight: bold;
    margin-bottom: 5px;
}

.carousel-caption-below p {
    font-size: 1rem;
    color: #666;
}

</style>

</html>
