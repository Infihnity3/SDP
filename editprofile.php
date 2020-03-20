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
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(&quot;assets/img/edit.jpg&quot;);background-repeat: no-repeat;background-size: cover;background-position: 5%;"></div>
            <form method="post">
                <h2 class="text-center"><strong>Edit Profile</strong></h2>
                <div class="form-group"><input class="form-control" type="text" name="edithostname" placeholder="Fullname"></div>
                <div class="form-group"><input class="form-control" type="text" name="edithostic" placeholder="IC Number"></div>
                <div class="form-group"><select class="form-control" name="edithostgender"><option value="Unselected">Choose your Gender</option><option value="Male">Male</option><option value="Female">Female</option></select></div>
                <div class="form-group"><input class="form-control" type="date" name="edithostdob"></div>
                <div class="form-group"><input class="form-control" type="tel" name="edithosttelephone" placeholder="012-3456789"></div>
                <div class="form-group"><textarea class="form-control" name="edithostaddress" placeholder="Address" style="height: 100px;"></textarea></div>
                <div class="form-group"><input class="form-control" type="email" name="edithostemail" placeholder="Email"></div>
                <div class="form-group" style="margin-bottom: 0px;"><a class="btn btn-primary" type="button" style="margin: 12px;margin-left: 50px;"href="userdashboard.php">Back</a><button class="btn btn-primary" type="submit" style="margin-top: 12px;margin-right: 12px;margin-bottom: 12px;margin-left: 12px;">Save edit</button></div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
