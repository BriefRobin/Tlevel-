



<!DOCTYPE html>
<html>
<head>
<title>GibjohnSubjectStudents</title>
</head>
<body>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.html">Home</a>
  <a href="bot.php">Guidance</a>
  <a href="resources.html">Resources</a>
  <a href="support.php">Support</a>
</div>

<h2>Students class</h2>
<p>Current students of this topic </p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   <br>

<br>   
</body>
</html> 



    <div>
        <form method="POST" action="add.php">
            <label>Firstname:</label><input type="text" name="firstname">
            <label>Lastname:</label><input type="text" name="lastname">
            <input type="submit" name="add">
        </form>
    </div>
    <br>
    <div>
        <table border="1">
            <thead>
                <th>Firstname</th>
                <th>Lastname</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                    include('conn.php');
                    $query=mysqli_query($conn,"select * from `user`");
                    while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
                                <a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>