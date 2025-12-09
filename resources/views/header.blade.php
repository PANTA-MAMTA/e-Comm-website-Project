<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand fw-bold" href="#">
            E-Comm
        </a>

        <!-- MOBILE TOGGLE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NAV CONTENT -->
        <div class="collapse navbar-collapse" id="navbarMenu">

            <!-- LEFT MENU -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">More</a>
                </li>
            </ul>

            <!-- SEARCH BAR -->
            <form class="d-flex me-3" action="/search">
                <input class="form-control me-2" type="search" name="query" placeholder="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>

            <!-- RIGHT MENU -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Add To Cart</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
