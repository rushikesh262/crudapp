<?php
include "connct.php";
if(isset($_GET['id'])){
        $stmt2 = $pdo->query("DELETE FROM `tabledb` WHERE id =  '".$_GET['id']."';");
    if($stmt2){
        header("Location: index.php");
        exit;
    }else {
        echo "not deleed;";
    }
}