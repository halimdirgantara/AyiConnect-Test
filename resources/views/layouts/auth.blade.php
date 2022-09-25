<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
        name="viewport">
    <title>@yield('title') &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet"
        href="{{ global_asset('library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    @stack('style')

    <!-- Template CSS -->
    <link rel="stylesheet"
        href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('css/components.css') }}">
    <!-- Start GA -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- END GA -->
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <!-- Header -->


                        <!-- Content -->
                        @yield('main')

                        <!-- Footer -->
                        <div class="simple-footer">
                            Copyright &copy; 2022 - <a target="_blank" href="https://github.com/halimdirgantara">MHalimD</a> using Stisla Admin Template
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ global_asset('library/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ global_asset('library/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ global_asset('library/tooltip.js/dist/umd/tooltip.js') }}"></script>
    <script src="{{ global_asset('library/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ global_asset('library/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ global_asset('library/moment/min/moment.min.js') }}"></script>
    <script src="{{ global_asset('js/stisla.js') }}"></script>

    @stack('scripts')

    <!-- Template JS File -->
    <script src="{{ global_asset('js/scripts.js') }}"></script>
    <script src="{{ global_asset('js/custom.js') }}"></script>
</body>

</html>
