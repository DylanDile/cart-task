<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Cart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/all_products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product/search">Product Search</a>
                    </li>
                </ul>

                <ul class="navbar-nav float-right">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Sign Up</a>
                    </li>
                    <li class="nav-item nav-logout d-none d-md-block mr-3">
                        @livewire('carts.cart-header')
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
