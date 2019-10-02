<?php include("header.php");
session_start();

//krijimi i userit
$db = mysqli_connect("localhost", "root", "", "authentication");
if (isset($_POST['register_btn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if ($password == $password2) {
        $password = md5($password);
        $sql = "insert into users (username,email,password) values ('$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        header("location: home.php");
    } else {
        $_SESSION['message'] = "The two passwords do not match";

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

        h3, h4 {
            text-align: center;
            font-family: serif, "Times New Roman";
            text-transform: uppercase;
        }

        .form-group {
            width: 100%;
        }

        input[type="text"], [type="email"], [type="password"], [type="password2"] {
            border: 2px solid;
            border-radius: 8px;
        }

        body {
            background-image: url('foto/home.jpg');
        }

        .card {
            background-color: #26262b9e;
            color: white;

        }

    </style>
</head>
<body>
<div class="container">
    <div class="col d-flex justify-content-center">
        <div class="card">
            <div class="card-body px-lg-5 pt-0">
                <h3>What Are You Waiting For? </h3>
                <h4>Hurry Up And Sign Up!</h4>
                <?php
                if (isset($_SESSION['message'])) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><?php echo $_SESSION['message'] ?></strong></div>
                    <?php unset($_SESSION['message']);
                }
                ?>

                <form method="post" action="Register.php" class="text-center was-validated">
                    <!--   username -->
                    <div class="form-group">

                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control form-control-sm" id="username" required>

                        <div class="valid-feedback">Valid</div>
                        <!-- email -->
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="email" required>

                        <div class="valid-feedback">Valid</div>

                    </div>
                    <!--password -->
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="password"
                               required
                               min="7">

                        <div class="valid-feedback">Valid</div>

                    </div>
                    <!-- confirm password -->
                    <div class="form-group ">
                        <label for="password2">Confirm Password:</label>
                        <input type="password" name="password2" class="form-control col-sm" id="password2"
                               required>

                        <div class="valid-feedback">Valid</div>

                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> I agree the
                            conditions
                        </label>
                    </div>
                    <button type="submit" class="btn btn-info" name="register_btn" data-toggle="tooltip"
                            title="Register">Sign
                        Up
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>