<?php
    session_start();
    echo "Anda berhasil login sebagai <b>". 
    $_SESSION['username']."</b> dan Anda terdaftar sebagai <b>".
    $_SESSION['status'];
?>
<br><br>
</b>silahkan Logout dengan link dibawah ini<br><br> <a href='logout.php'>disini</a>