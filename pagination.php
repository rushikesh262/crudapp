<?php 
include "connct.php";

    $start = 0;  
    $per_page = 2;
    $page_counter = 0;
    $next = $page_counter + 1;
    $previous = $page_counter - 1;
    
    if(isset($_GET['start'])){
     $start = $_GET['start'];
     $page_counter =  $_GET['start'];
     $start = $start *  $per_page;
     $next = $page_counter + 1;
     $previous = $page_counter - 1;
    }

    $count_query = "SELECT `id` FROM `tabledb`";
    $query = $pdo->prepare($count_query);
    $query->execute();
    $count = $query->rowCount();
    // calculate the pagination number by dividing total number of rows with per page.
    $paginations = ceil($count / $per_page);
?>
