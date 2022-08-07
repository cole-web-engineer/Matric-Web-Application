<!--
 * Created by PhpStorm.
 * User: Collins
 * Date: 8/12/2019
 * Time: 10:47 PM
 -->
<html>
    @include('partials.head')

    <body>

    <div class="image-container set-full-height" style="background-image: url('assets/img/bg2.jpg')">

        <!-- Ka Data Kaya -->

        <!--   Creative Tim Branding   -->
        <a href="{{ url('/') }}">
            <div class="logo-container">
                <div class="logo">
                    <img src="assets/img/new_logo.png">
                </div>
                <div class="brand">
                    TAALNET
                </div>
            </div>
        </a>

        <!--  Made With Get Shit Done Kit  -->
        <a href="{{ url('http://talmaitsolutions.co.za') }}" class="made-with-mk">
            <div class="brand">C.H</div>
            <div class="made-with">Made with <strong>Talma IT</strong></div>
        </a>

        <!--  data end -->

        @yield('content')

        @include('partials.footer')

    </div>

        @include('partials.scripts')

    </body>

</html>