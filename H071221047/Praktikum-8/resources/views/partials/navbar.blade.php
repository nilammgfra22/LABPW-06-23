<nav class="navbar navbar-expand-lg navbar-dark mb-5">
    <div class="container">
        <img class="img" src="img/logo.png" alt="logo">
        <div class="collapse navbar-collapse ms-4" id="navbarNav">
            <ul class="me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('product') ? 'active' : '' }}" href="/product">Products</a>
                </li>
            </ul>
            <form class="d-flex align-items-end" action="{{ route('productlines') }}" method="GET">
                <input class="form-control me-2" type="search" name="productLine"
                    placeholder="Search by Product Line" aria-label="Search">
                <button class="btn search"
                    type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
