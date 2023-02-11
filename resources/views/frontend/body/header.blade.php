@php

$route = Route::current()->getName();
@endphp

<header>
    <section class="hero" id="hero">
        <div class="heroText">
            <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                Nomad Force
            </h1>

            <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                create a great video for your <strong class="custom-underline">website</strong>
            </p>
        </div>

        <div class="videoWrapper">
            <video autoplay="" loop="" muted="" class="custom-video" poster="videos/792bd98f3e617786c850493560e11c45.jpg">
                <source src="videos/814dc43e870597176cad645798825c03.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>

        <div class="overlay"></div>
    </section>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <strong>Nomad Force</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="{{ ($route == 'home.blog') ? 'nav-item active' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>

                    <li class="{{ ($route == 'home.blog') ? 'nav-item active' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('home') }}">Our Studio</a>
                    </li>

                    <li class="{{ ($route == 'home.blog') ? 'nav-item active' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('home') }}">Portfolio</a>
                    </li>

                    <li class="{{ ($route == 'home.blog') ? 'nav-item active' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('home') }}>News & Events</a>
                    </li>

                    <li class=" {{ ($route == 'home.blog') ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ route('home') }}>Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
