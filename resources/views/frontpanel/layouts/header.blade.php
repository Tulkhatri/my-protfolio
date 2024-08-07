<header class="nav-header">
    <div class="container">
        <div class="navbar-wrapper">
            <div class="logo-wrapper">
                <div class="logo">
                    <h1>T</h1>
                </div>
                <div class="my-name">
                    <p>Tul Bahadur</p>
                    <p>Khatri</p>
                </div>
            </div>
            <div class="menu-wrapper">
                <ul class="menu-items">
                    <li class="mainmenu_link">
                        <a href="{{ route('frontpanel.homepage') }}">
                            Home
                        </a>
                    </li>
                    {{-- <li class="mainmenu_link">
                        <a href="{{ route('frontpanel.about-me') }}">
                            About Us
                        </a>
                    </li>
                    <li class="mainmenu_link">
                        Services
                    </li>
                    <li class="mainmenu_link">
                        Projects
                    </li>
                    <li class="mainmenu_link">
                        Contact
                    </li> --}}
                </ul>
            </div>
            <div class="home-icon-wrapper">
                <span class="toggle_icon c-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">

                    <div class="logo-wrapper">
                        <div class="me-2">
                            <h1 class="color-light-green">T</h1>
                        </div>
                        <div class="my-name">
                            <p>Tul Bahadur</p>
                            <p>Khatri</p>
                        </div>
                    </div>
                    <div class="btn-close-wrapper">
                        <i class="fa-solid fa-xmark" data-bs-dismiss="offcanvas"></i>
                    </div>
                </div>
                <div class="offcanvas-body">
                    <h4>About Me</h4>
                    <p class="mt-4"> I im experience web developer</p>
                    <h4 class="mt-4">Get In Touch</h4>
                    <form action="" class="mt-8"type="POST">
                        <input type="text" name="name" placeholder="Your Name" class="mt-4 border-light-green">
                        <input type="email" name="email" placeholder="Your Email" class="mt-4 border-light-green">
                        <textarea name="Message" id="" cols="30" rows="5" placeholder="Message"
                            class="mt-4 border-light-green"></textarea>
                        <button type="button" class="mt-3">Submit Now </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
