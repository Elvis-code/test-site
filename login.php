<?php include("head1.php");
session_start();

//krijimi i userit
$db = mysqli_connect("localhost", "root", "", "authentication");
if (isset($_POST['login_btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);  //Me pare hashuam pass
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        header("location: home.php"); //shkon te home page
    } else {
        $_SESSION['message'] = "The combination username/pass do not match ";

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register, Log in, Log out</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/proper.js"></script>
    <style>
        .alert-danger {
            width: 100%;
        }

        body {
            background-image: url("foto/simple2.jpg");;
        }




        input[type="text"], [type="password"] {
            border: 2px solid;
            border-radius: 8px;

        }
        .card{
            width: 50%;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="col-lg d-flex justify-content-center">
        <div class="card">
            <div class="card-body px-lg-5 pt-0">
                <h4>Register, Login, Logout</h4>
                <br>
                <?php
                if (isset($_SESSION['message'])) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><?php echo $_SESSION['message'] ?></strong></div>
                    <?php unset($_SESSION['message']);
                }
                ?>

                <form method="post" action="login.php" class="text-center was-validated">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control form-control-sm" id="username" required>

                        <div class="valid-feedback">Valid</div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="password"
                               required min="7">

                        <div class="valid-feedback">Valid</div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-danger" name="login_btn" data-toggle="tooltip" title="Login">
                        Sign
                        IN
                    </button>


                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

















