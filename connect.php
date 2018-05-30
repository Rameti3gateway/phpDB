<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "provinceth";
    $connect = mysql_connect($host,$user,$pass,$dbname) 
    or die("No connected");
    mysql_query("SET character_set_results=utf8");
    mysql_query("SET character_set_client=utf8");
    mysql_query("SET character_set_connect=utf8");
    mysql_select_db($dbname,$connect);
?>
