<?php
    session_start();
    echo "Anda berhasil login sebagai <br><h1><b>". 
    $_SESSION['username']."</b></h1> dan Anda terdaftar sebagai <h1><b>".
    $_SESSION['status'];
?>
<br><br>
</b></h1>silahkan Logout dengan link dibawah ini<br><br> <a href='logout.php'>disini</a>