<?php
    session_start();
    require_once ('connect.php');
    if(isset($_SESSION['userId'])){
        $uid=$_SESSION['userId'];      
        
    }else{
        header('Location: hiba.html');
        die();
    }
    $sql="SELECT uname FROM user Where uid='$uid'";
    $res=$db->query($sql);
    if(!$res){
        die();
    }
    $row= $res-> fetch_row();
    $name=$row[0];
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
    </head>
    <body>
        <?php
        echo "Szép estét kedves $name!";
        ?>
        <div id=content">
            <form action="exit.php" method="post">
                <br>
                <input type="submit" value="Kilépés" name="exit">
                
            </form>
        </div>
    </body>
</html>
