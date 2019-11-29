<?php
    session_start();
    if ( isset($_SESSION["status"])) {
        if ( $_SESSION["status"] == "Administrator" ) {
            header("Location: pages_admin.php");
            exit;
        } else {
            header("Location: pages_member.php");
            exit;
        }
    }



    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
    mysql_connect('localhost','root','');
    mysql_select_db('informatika');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $submit = $_POST['submit'];

    if($submit){
        $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
        $query = mysql_query($sql);
        $row = mysql_fetch_array($query);
        if($row['username']!=""){
            //berhasil login
            $_SESSION['username']=$row['username'];
            $_SESSION['status']=$row['status'];
            
            if($row['status'] == 'Administrator'){
            echo"    
                <script>
                    alert('Anda berhasil login sebagai $row[status].');
                    document.location.href='pages_admin.php';
                </script>";
                exit;
            }elseif( $row["status"] == "Member" ){
            echo"
                <script>
                    alert('Anda berhasil login sebagai $row[status].');
                    document.location.href='pages_member.php';
                </script>";
                exit;
            }
?>



<?php
    }else{
        //gagal login
?>

<script language script="JavaScript">
    alert('Anda gagal login');
        document.location='login.php';
</script>




<?php
        }
    }
?>




<form method="POST" action="login.php">
    <p align="center">
        Username : <input type="text" name="username"><br><br>
        Password : <input type="password" name="password"><br><br>
        <input type="submit" name="submit">
    </p>
</form>