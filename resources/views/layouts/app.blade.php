<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gunpla.Builders</title>
        <link rel="stylesheet" href="{{URL::asset('assets/css/MaterialIcons.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/vendor/materialize/css/materialize.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/js/select2-4.0.3/dist/css/select2.min.css')}}">
    </head>

    <body class="grey lighten-3">
        <header>
            <div class='blue darken-2'>
                <div class='container'>
                    @if (Auth::check())
                        <a class='grey-text text-lighten-4 right' href='/logout'>Logout</a>
                        <?php $user = Auth::user(); ?>
                        @if ($user->hasRole('Admin'))
                            <a class='grey-text text-lighten-4 right' href='/admin'>Administration</a>
                        @endif
                    @else
                        <a id='register-link' href="/register" class='grey-text text-lighten-4 right'>Register</a>
                        <a id='login-link' href="/login" class='grey-text text-lighten-4 right'>Login</a>
                    @endif

                    <div class='clearfix'></div>
                </div>
            </div>

            <!--
            <ul id='communityDropdown' class='dropdown-content'>
                <li><a href=''>Forum</a></li>
                <li><a href=''>Build Logs</a></li>
                <li><a href=''>Image Galleries</a></li>
            </ul>
            -->

            <nav class='blue'>
                <div class='container'>
                    <div class='nav-wrapper'>
                        <a href="/" class="brand-logo">Gunpla.Builders</a>
                        <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>

                        <ul class='right hide-on-med-and-down'>
                            <li><a href="/prices">Prices</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/forum">Forum</a></li>
                            <!--<li><a class="dropdown-button" href="#!" data-activates="communityDropdown">Community<i class="material-icons right">arrow_drop_down</i></a></li>-->
                        </ul>
                        <ul class='side-nav' id='mobile-nav'>
                            <li><a href="/prices">Prices</a></li>
                            <li><a href="/news">News</a></li>
                            <li><a href="/forum">Forum</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main id="main">
            @yield('content')
        </main>

        <footer class='page-footer blue accent-3 white-text'>
            <div class='footer-copyright'>
                <div class='container'>
                    &copy; <?= date('Y') ?> Gunpla.Builders
                    <a class="grey-text text-lighten-4 right" href="#!">Contact</a>
                    <a class="grey-text text-lighten-4 right" href="#!">Legal</a>
                </div>
            </div>
        </footer>

        <script src="{{URL::asset('assets/vendor/jquery/jquery-3.1.0.min.js')}}"></script>
        <script src="{{URL::asset('assets/vendor/materialize/js/materialize.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/select2-4.0.3/dist/js/select2.min.js')}}"></script>

        @if (\Session::has('message'))
            <script>
                Materialize.toast('{{\Session::get('message')}}', 4000);
            </script>
        @endif

        <script>
            $(".button-collapse").sideNav();
            //$('select').material_select();
            $('select').select2();

            $('#footer-collapse').click(function() {
                $('body > footer').toggleClass('collapsed');
            });

            $('.card-collapse').click(function(e) {
                var elem = null;

                if (e.target.className == 'card-collapse') {
                    elem = e.target.firstElementChild;
                } else {
                    elem = e.target;
                }

                if (elem && typeof elem == 'object' && elem.className && elem.className == 'material-icons') {
                    if (elem.innerText == 'keyboard_arrow_down') {
                        elem.innerText = 'keyboard_arrow_up';
                    } else {
                        elem.innerText = 'keyboard_arrow_down';
                    }

                    elem.parentNode.parentNode.parentNode.classList.toggle('collapsed');
                }
            });

            $('.collapse-ul').click(function(e) {
                if (e.target.innerText == 'keyboard_arrow_up') {
                    e.target.innerText = 'keyboard_arrow_down';
                } else {
                    e.target.innerText = 'keyboard_arrow_up';
                }
                e.target.parentNode.nextElementSibling.classList.toggle('collapsed');
            });
        </script>
    </body>
</html>
