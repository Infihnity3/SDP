<!DOCTYPE html>
<html>
<body>
<form method="post" action="testing.php">
<h5 style="margin-left: 230px;width: 300px;">Date of birth</h5>
<div class="form-group">
    <input class="form-control" type="date" style="width: 300px;margin-left: 230px;background-color: rgb(247,249,252);" name="admindob">
    </div>
<div class="form-group">
    <button class="btn btn-primary" type="submit" style="margin-left: 230px;width: 300px;">Add</button>
</div>  
</form>
                <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<?php
    
    include "conn.php";
    if(isset($_POST['admindob'])){//if the information input then the function below will start.
        //retrieve data from the top
        $date = htmlentities($_POST['admindob']);
        $dob = date('Y-m-d', strtotime($date));


        //insert the data into the database
        $sql = "Insert into testingt (DoB) 
        values ('$dob');";
    
        // echo $sql;
        //if connection with Db failed then unable to register, else register successfully
        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn)<=0){
            echo "<script>alert('Unable to add admin! \\nPlease Try Again!');";
            die("window.history.go(-1);</script>");
        }else{
            echo "<script>alert('Added Successfully!');";
            echo "window.location.href='admindashboard.php';</script>";
        }
        }
?>
</body>
</html>