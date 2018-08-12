<?php
    $link  = mysqli_connect("dbms.iiitdmj.ac.in", "2016270", "86df7dcf", "2016270") ;
    if(mysqli_connect_error($link)){
        die ('ERROR: Unable to connect') ;
    }
?>