<?php

    $servername = "localhost" ;
    $username = "root" ;
    $password = "" ;
    $dbname= "convertion" ;

    $conn = mysqli_connect($servername , $username, $password, $dbname);
    if (!$conn) 
    {
    	die("Connection failed: ".mysqli_connect_error());
    }
    else 'Connection successfully'

    	mysqli_close($conn);
    //{
    	//echo "success";
    //}


?>