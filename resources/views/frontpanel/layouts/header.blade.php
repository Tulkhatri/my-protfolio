<header class="nav-header">
    <div class="container">
        <div class="navbar-wrapper">
            <div class="logo-wrapper">
                <div class="logo">
                    <h1>T</h1>
                </div>
                <div class="my-name">
                    <h5>Tul Bahadur</h5>
                    <h5>Khatri</h5>
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
                            <h5>Tul Bahadur</h5>
                            <h5>Khatri</h5>
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
                    <form action="" class="mt-8"type="POST" id="messageForm">
                        <input type="text" name="name" placeholder="Your Name" class="mt-4 border-light-green"
                            id="name">
                        <input type="email" name="email" placeholder="Your Email" class="mt-4 border-light-green"
                            id="email">
                        <textarea name="Message" cols="30" rows="5" placeholder="Message" class="mt-4 border-light-green"
                            id="message"></textarea>
                        <h5 class="text-center primary-color none">Message Sent successfully!</h5>
                        <button type="button" class="mt-3 btn-submit btn-primary">Submit Now </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
<script src="{{ asset('frontpanel/assets/js/jquery.js') }}"></script>
<script>
    $(document).ready(function() {
        $(document).off('click', '.btn-submit');
        $(document).on('click', '.btn-submit', function() {

            $('.error').remove();

            let isValid = true;
            const name = $('#name').val().trim();
            if (name === '') {
                $('#name').after(
                    '<span class="error">This field is required</span>');
                isValid = false;
            }
            const email = $('#email').val().trim();
            if (email === '') {
                $('#email').after(
                    '<span class="error">This field is required</span>');
                isValid = false;
            } else if (!validateEmail(email)) {
                $('#email').after('<span class="error">Enter a valid email</span>');
                isValid = false;
            }

            const message = $('#message').val().trim();
            if (message === '') {
                $('#message').after(
                    '<div class="error">This field is required</div>');
                isValid = false;
            }

            if (isValid) {
                $('.none').addClass('block');
                document.getElementById('messageForm').reset();
                $('.btn-submit').prop('disabled', true);
                setTimeout(() => {
                    $('.btn-submit').prop('disabled', false);
                    $('.none').removeClass('block');
                    document.getElementById('messageForm').reset();
                }, 1000);
            }

            // Function to validate email format
            function validateEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
        });











    });
</script>
