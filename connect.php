<?php

@$baglanti = new mysqli('localhost', 'root', '', 'otopark'); // Database connection is established.
    if(mysqli_connect_error()) //If there is any error,write it.
    {
        echo mysqli_connect_error();
        exit; //If there is any error in the database connection,ended the connection.
    }

$baglanti->set_charset("utf8");

?>
