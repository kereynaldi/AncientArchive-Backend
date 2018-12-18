<html>
    <head>

        <meta name="description" content="Ancient Archieve is a website to Archieve and store your Docs" />
        <meta name="author" content="The Unsung Heroes">

        <!-- Mobile Webs -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
        <meta name="mobile-web-app-capable" content="yes">

        <title>
            Ancient Archive
        </title>

        <!-- Website Theme -->
        <meta id="theme-color" name="theme-color" content="#4AB3B6">
        <link rel="stylesheet" href="{{ asset('beranda/css/main.css') }}" />

    </head>

    <body>
        <div class="se-pre-con"></div>

        <div class="container-head">
            <h1>Ancient Archive Project</h1>
<<<<<<< HEAD
            <a class="login" href="{{ url('/login') }}">Login</a>
            <!-- DIHILANGKAN DULU KARENA YANG BISA MENAMBAHKAN PEGAWAI HANYA ADMIN/ATASAN -->
            <!-- BISA DIGUNAKAN KETIKA ROLE SUDAH JADI TAPI PAGE TETAP TERSEMBUNYI STRICTED ACCESS! -->
            <!-- <a class="login" href="{{ url('/register') }}">Register</a> -->
=======
            <a class="login" href="{{ url('/register') }}">Register</a>
            <a> &nbsp;/&nbsp; </a>
            <a class="login" href="{{ url('/login') }}">Login</a>
>>>>>>> 9539ac96cf4e50ce4c5fb00dd01e6944a2700f43
        </div>

        <div class="container-body">
            <h1>Ancient <br> Archive.</h1>
            <h2>Make Your Archive More Secure!</h2>
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
