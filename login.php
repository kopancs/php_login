<?php
    session_start();
    require_once ('connect.php');
    if(isset($_POST['enter'])){
        $username=$_POST['uname'];
        $password=$_POST['pwd'];
        
        $sql="SELECT * FROM user WHERE uname ='$username' AND pwd='$password'";
        $res=$db->query($sql);
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if($res->num_rows==1){
            echo "Sikeres bejelentkezés :)";
            echo "<br>";
            echo "Üdvözöljük, kedves $username! <br>Sikeresen beléptél! ";
            $row=$res->fetch_row();
            $_SESSION['userId']=$row[0];
            echo "<a href='welcome.php'>Üdvözlet</a>";
        }else{
            echo "Helytelen felhasználónév vagy jelszó";
        }
        ?>
    </body>
</html>
