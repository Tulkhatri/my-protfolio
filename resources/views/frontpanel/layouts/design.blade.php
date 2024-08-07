<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <meta name="keywords" content="@yield('meta_keywords')"> --}}
        <meta name="description" content="@yield('meta_description')">
        <title>@yield('frontpanel-page-title') - {{ config('app.name') }}</title>

        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">

        <!-- Bootstrap 5.3.3 CSS  -->
        <link rel="stylesheet" href="{{ asset('frontpanel/assets/css/bootstrap.css') }}">

        <!-- swiper  -->
        <link rel="stylesheet" href="{{ asset('frontpanel/assets/css/swiper.css') }}">

        <!-- Fontawesome 6.5.2 Css  -->
        <link rel="stylesheet" href="{{ asset('frontpanel/assets/css/all.min.css') }}">

        <!-- swiper  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!-- Select 2  -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

        <!-- Fancy  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

        <!-- AOS ANIMATION  -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Custom Css  -->
        <link rel="stylesheet" href="{{ asset('frontpanel/assets/scss/main.css') }}">
        @yield('front-style')
    </head>

    <body>
        <!-- Starts::Header Section -->
        @include('frontpanel.layouts.header')
        <!-- Ends::Header Section -->

        @yield('front-contents')

        <!-- Starts::Footer Section -->
        @include('frontpanel.layouts.footer')
        <!-- Ends::Footer Section -->

        <!-- Jquery 3.7.1 -->
        <script src="{{ asset('frontpanel/assets/js/jquery.js') }}"></script>
        <!-- Bootstrap 5.3.3  -->
        <script src="{{ asset('frontpanel/assets/js/bootstrap.js') }}"></script>

        <!-- Fancybox  -->
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

        <!-- Font Awesome 6.5.2  -->
        <script src="{{ asset('frontpanel/assets/js/all.min.js') }}"></script>

        <!-- WOW counter  -->
        <script src="{{ asset('frontpanel/assets/js/counter.js') }}"></script>

        <!-- SWIPER  -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Font Awesome 6.5.2  -->
        <script src="{{ asset('frontpanel/assets/js/bootstrap.bundle.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

        <!-- Select 2  -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"
            integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- AOS animation  -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Custom Script  -->
        <script src="{{ asset('frontpanel/assets/js/script.js') }}"></script>

        <script>
            var baseurl = '{{ url(' / ') }}';
            var token = "<?= csrf_token() ?>";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function showLoader() {
                $('#loadingOverlay').show();
            }

            function hideLoader() {
                $('#loadingOverlay').hide();
            }

            function showNotification(message, type) {
                var notification = document.getElementById('customNotification');
                notification.textContent = message;

                if (type === 'success') {
                    notification.style.backgroundColor = '#28a745'; // Green for success
                } else if (type === 'error') {
                    notification.style.backgroundColor = '#dc3545'; // Red for error
                }

                // Show the notification
                notification.style.display = 'block';

                // Hide the notification after 3 seconds (adjust as needed)
                setTimeout(function() {
                    notification.style.display = 'none';
                }, 5000);
            }
        </script>
        @yield('script')
    </body>

</html>
