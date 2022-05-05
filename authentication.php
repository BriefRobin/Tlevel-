

<?php     
         //This is a stage for when the login had failed or was invalid. 
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<script> window.location.assign('index.html'); </script>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            echo "<h2> Please go back. by pressing the button below  button top of the screen  </h2>"; 
            
        }     
?>  
 <!-- the stylesheet for the format of page to function-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--Button to login stage-->
<a href="login.html" class="btn btn-primary btn-lg danger" role="button" aria-disabled="true">Go back</a>