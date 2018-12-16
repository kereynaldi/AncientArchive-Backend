<html>
    <head>

        <meta name="description" content="Ancient Archieve is a website to Archieve and store your Docs" />
        <meta name="author" content="The Unsung Heroes">

        <!-- Mobile Webs -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
        <meta name="mobile-web-app-capable" content="yes">

        <title>
            Login|Ancient Archieve
        </title>

        <!-- Website Theme -->
        <meta id="theme-color" name="theme-color" content="#4AB3B6">
        <link rel="stylesheet" href="{{ asset('beranda/css/login.css') }}" />
    </head>

    <body>
        <div class="se-pre-con"></div>

        <div class="container-head">
            <h1><a href="{{ url('/') }}">Ancient Archieve Project</a></h1>
        </div>

        <div class="container-body">

            <div class="container-card">
                <p>&nbsp;</p>
                <div class="login-header">
                    <img class="icon" src="{{ asset('beranda/icon/login.png') }}" alt="Login-icon" align="center">
                    <h2>Login</h2>
                </div>

                <form method="POST" action="{{ route('register') }}">
                  {{ csrf_field() }}
                  <div>
                      <label for="NIP" ><b>NIP</b></label>
                      <br>
                      <input name="NIP" type="text">

                      <label for="name" ><b>Nama Lengkap</b></label>
                      <br>
                      <input name="name" type="text">

                        <label for="email" ><b>Email</b></label>
                        <br>
                        <input name="email" type="text">

                        <label for="password" ><b>Password</b></label>
                        <br>
                        <input name="password" type="password">
                    </div>
                    <button class="button">Register</button>
                </form>

            </div>

            <h1>Ancient <br> Archieve.</h1>
            <p>Make Your Archieve More Secure!</p>
        </div>


        <!-- JQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

        <script>
            $(window).load(function() {
                $(".se-pre-con").fadeOut("slow");;
            });
        </script>

    </body>
</html>
