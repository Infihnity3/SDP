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
    <nav class="navbar navbar-light navbar-expand-md navigation-clean shadow">
        <div class="container">
          <a class="navbar-brand" href="#" target="_top">SBN</a>
          <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active">Welcome back, NAME</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admindashboard.php">Dashboard</a></li> <!-- if admin login goes to admindashboard if host login set to host -->
                    <li class="nav-item dropdown">
                      <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true" href="#">Services</a> <!-- Change all the services for Host -->
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" role="presentation" href="adminroomlist.php">Rooms</a>
                          <a class="dropdown-item" role="presentation" href="userlist.php">Users</a>
                          <a class="dropdown-item" role="presentation" href="addadmin.php">Add Admin</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true" href="#">Services</a> <!-- Change all the services for Host -->
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" role="presentation" href="userroomlist.php">Rooms</a>
                          <a class="dropdown-item" role="presentation" href="createroom.php">Create Room</a>
                          <a class="dropdown-item" role="presentation" href="editprofile.php">Edit Profile</a>
                          <a class="dropdown-item" role="presentation" href="changepassword.php">Change Password</a>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
