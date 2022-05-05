<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    </head>
<body>
    <nav class="navbar navbar-default">
        <div class="containr-fluid">
            <a class="navbar-brand" href="https://campcodes.com">CampCodes</a>
        </div>
    </nav>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        <h3 class="text-primary">PHP - Count Total Rows Source Code</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-4">
            <form method="POST" action="add_member.php">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" name="firstname" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" name="lastname" class="form-control" required="required"/>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" required="required"/>
                </div>
                <center><button class="btn btn-primary" name="add">Add Member</button></center>
            </form>
        </div>
        <div class="col-md-8">
            <?php include"count_rows.php";?>
            <br />
            <table class="table table-bordered">
                <thead class="alert-info">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once 'conn.php';
                        $query = mysqli_query($conn, "SELECT * FROM `member`") or die(mysqli_error());
                        while($fetch = mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td><?php echo $fetch['firstname']?></td>
                            <td><?php echo $fetch['lastname']?></td>
                            <td><?php echo $fetch['address']?></td>
                        </tr>
                    <?php
                        }
                    ?>
 
                </tbody>
            </table>		
        </div>
    </div>
</body>	
</html>