<!--The connection process for localhost PhpMyAdmin -->
<!--This file is need for the dbconnect file for them to work together-->
<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "giblog";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  


