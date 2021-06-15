<!-- HALAMAN INI UNTUK HOME DARI /FORM -->

<!-- digunakan untuk Form -->
<!DOCTYPE html>
<html> 
    <head> 
        <title> Home </title>
    </head>

    <body>
        <!-- untuk simpan username dan email. Diambil dari route::form  -->
        <form action="/form/proses" method="post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

            Username : <input type="text" name="username"> <br/>
            Email    : <input type="text" name="email"> <br/>
                       <input type="submit" value="Submit"> <br/>
        
        </form>
    </body>
</html>

