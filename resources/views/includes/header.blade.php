 <!-- HEADER START -->

    <header class="header-main">
        <nav class="navbar navbar-expand-all fixed-top-head header-innerpage">
            <a class="navbar-brand" href="index.html">

                <img src="{{url('public/front/images/logo.png')}}" class="image" alt="logo">

            </a>
            <div class="ml-auto button-action ml-auto dropdown">
                <!-- <button class="btn-01 btn">Log In
                    <i class="fas fa-user"></i>
                </button> -->

                <button class="btn-user dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fas fa-user"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">
                        <i class="far fa-user"></i>Your Account</a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-shopping-bag"></i>Your Orders </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-heart"></i>Shortlist</a>
                    <!-- <span class="para-1-dropdown">If you are new user</span> -->
                    <div class="btn-inline d-flex flex-column">
                        <button class="   btn-link" data-toggle="modal" data-target="#exampleModalCenter1">Register </button>
                        <button class="btn-01 btn dropdown-login" data-toggle="modal" data-target="#exampleModalCenter">Log In</button>
                    </div>
                </div>
            </div>
            <a href="cart.html" class="cart-mobile">
                <span class="item-count">2</span>
                <i class="fas fa-shopping-cart"></i>
            </a>

            <button onclick="openNav()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{url('public/front/images/bars.png')}}">
            </button>

        </nav>
    </header>