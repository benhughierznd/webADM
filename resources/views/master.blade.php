<!-- HALAMAN INI UNTUK MASTER PADA /JOB -->

<!-- blade untuk route /job -->
<!DOCTYPE html>
<html>
    <head> 
        <title> Job ADM </title>
    </head>

    <body> 
        <!-- untuk connect ke route -->
        <form action="/job" method="get">
        <header>
            <h2> Job Talend & SQL </h2>
            <!-- buat visualisasi dari route /job -->
            <nav> 
                <a href="/job"> Home </a>
                |
                <a href="/job/about"> About </a>
            </nav>
        </header>
        <hr> 
        <br>
        <br>
        
        <!-- judul halaman -->
        <h3> @yield('judul_halaman') </h3>

        <!-- bagian konten -->
        @yield('konten')

        <br>
        <br>
        <hr>
        <footer> 
            <p> &copy; <a>Made by Ben Hughie Rezanda</a>. 2020 - 2021</p>
        </footer>

    </body>