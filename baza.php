<?php 
    echo "tutaj odpala sioe baza";
    setcookie("KArlo",1);
    $xd = mysqli_connect("localhost","root","", "xdxd");
    $result = $xd->query("SELECT * FROM `users`");
    
?>