<div class="form-inline">
    <label>Num of rows: </label>
    <?php
        require_once'conn.php';
        $query=mysqli_query($conn, "SELECT * FROM `member`") or die(mysqli_error());
        $rows=mysqli_num_rows($query);
 
        echo '<input type="text" name="rows" class="form-control" size="4" value="'.$rows.'" disabled="disabled"/>';
    ?>
</div>