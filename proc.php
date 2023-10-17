<?php
$l = $_POST["login"];
$p = $a = (md5($_POST["password"]))  ;
include("cfg.php");
$result = $mysqli->query("SELECT * FROM users WHERE login='$l' and password='$p'");
if (mysqli_num_rows($result) > 0){
    echo "GOOOD!!!!";
}
else{
    echo "BYE BYE !!!";
}

?>