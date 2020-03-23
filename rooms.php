<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Homepage.php</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue-1.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo-1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <?php include "nav1.php" ?>
    <div>
        <div class="container" style="padding: 10px;">
            <h1 class="text-center">Rooms</h1>
            <div class="row roomlist" style="margin: 25px 0px 25px 0px;background-color: #ffffff;">
                <div class="col-md-12" style="background-color: rgb(255,255,255); border: solid; border-width:1px;" >
                

                    <?php include "conn.php";
                        $sql = "select roomName, roomRequirement from room";//add a new sql query
                        $result = mysqli_query($conn, $sql);
                        while($rows = mysqli_fetch_array($result))
                                    {   
                                        echo "<tr>";
                                        echo "<h3 style='width: 500px;'>".$rows['roomName']."</h3>";
                                        echo "<p class='d-inline' style='width: 700px;'>".$rows['roomRequirement']."</p>";
                                        echo "<td><a class='btn btn-primary float-right' role='button' style='margin: 10px;padding:10px;width: 100px;height: 50px;background-color: rgb(17,112,49);' href='captcha.php'>Join</a></td>";
                                }
                    ?>
                    
                </div>
               <!-- loop the room -->

            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php include "footer.php" ?>
</body>

</html>
