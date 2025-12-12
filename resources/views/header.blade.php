@php
    use App\Models\Cart;

    $total = 0;
    if (Session::has('user')) {
        $userId = Session::get('user')['id'];
        $total = Cart::where('user_id', $userId)->count();
    }
@endphp

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ms-3" href="/">E-Comm</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- LEFT MENU -->
        <ul class="navbar-nav me-auto ms-3">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>

            @if(Session::has('user'))
                <li class="nav-item">
                    <a class="nav-link" href="/myorder">Orders</a>
                </li>
            @endif
        </ul>

        <!-- SEARCH BAR -->
        <form class="d-flex" action="/search">
            <input class="form-control me-2 search-box" 
                   type="text" name="query" placeholder="Search Products">

            <button class="btn btn-primary">Search</button>
        </form>

        <!-- RIGHT MENU -->
        <ul class="navbar-nav ms-3">

            @if(Session::has('user'))

                <li class="nav-item">
                    <a class="nav-link" href="/cartlist">
                        Cart Items ({{ $total }})
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" 
                       role="button" data-bs-toggle="dropdown">
                        {{ Session::get('user')['name'] }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </li>
                    </ul>
                </li>

            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            @endif

        </ul>
    </div>
</nav>
