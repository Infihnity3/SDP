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
            <div class="image-holder" style="background-image: url(&quot;assets/img/vote.jpg&quot;);background-repeat: no-repeat;background-size: cover;background-position: 30%;"></div>
            <form method="post">
                <h2 class="text-center"><strong>Enter information</strong>.</h2>
                <div class="form-group"><input class="form-control" type="text" name="votername" placeholder="Fullname"></div>
                <div class="form-group"><input class="form-control" type="text" name="voteric" placeholder="IC Number"></div>
                <div class="form-group"><select class="form-control"><option value="12">Choose your Gender</option><option value="13">This is item 2</option><option value="14">This is item 3</option></select></div>
                <div class="form-group">
                    <h6 style="margin: 0px;margin-left: 10px;">Date of birth</h6><input class="form-control" type="date" name="voterdob"></div>
                <div class="form-group"><input class="form-control" type="tel" name="voterphone" placeholder="012-3456789"></div>
                <div class="form-group"><input class="form-control" type="email" name="voteremail" placeholder="Email"></div>
                <div class="form-group"><textarea class="form-control" name="voteraddress" placeholder="Address" style="height: 90px;"></textarea></div>
                <div class="form-group"><a class="btn btn-primary btn-block" type="submit" href=insideroom.php>Next</a></div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
