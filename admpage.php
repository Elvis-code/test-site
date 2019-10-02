<?php include("head1.php");
$username="";
$email="";
$password="";
$id=0;
session_start();
$edit_state = false;
//krijimi i userit
$db = mysqli_connect("localhost", "root", "", "authentication");
if (isset($_POST['save_btn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $sql = "INSERT into users (username,email,password) VALUES ('$username', '$email', '$password')";
    mysqli_query($db, $sql);
    $_SESSION['message'] = "Success";
    header("location: admpage.php");
}

//updetimi i te dhenave
if (isset($_POST['update_btn'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $id=$_POST['id'];
    mysqli_query($db, "UPDATE users SET username='$username', email='$email', password='$password' WHERE id=$id");
    header("location:admpage.php");
}
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db,"DELETE FROM users WHERE id=$id");
    header('location: admpage.php');
}
// Nxjerrja e te dhenave ne tabela
$res = mysqli_query($db, "SELECT * FROM users");
?>
<?php if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit_state= true;
    $rec= mysqli_query($db, "SELECT * FROM users WHERE id=$id");
    $record=mysqli_fetch_array($rec);
    $username=$record['username'];
    $email=$record['email'];
    $password=$record['password'];
    $id=$record['id'];
} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/proper.js"></script>
    <title>Admin Page</title>
    <style>
        input[type="text"], [type="email"], [type="password"] {
            border: 2px solid;
            border-radius: 4px;
        }

        h3 {
            text-align: center;
            font-family: serif, "Times New Roman";
            text-transform: uppercase;
        }
        .btn{
            color: white;
        }
    </style>
</head>
<body>
<div class="container">

    <table class="table table-dark table-hover">
        <caption style="color: black">List of users</caption>
        <!-- cfare  permban tabela-->
        <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_array($res)) { ?>
            <tr>
                <th scope="row"><?php echo $row['username'] ?></th>
                <td> <?php echo $row['email'] ?></td>
                <td><a href="admpage.php?edit=<?php echo $row['id'];?>"><button type="submit" class="btn btn-success" name="save_btn" data-toggle="tooltip"
                                                                                title="Save">Edit</button></td>
                <td> <a href="admpage.php?del=<?php echo $row['id'];?>"><button class="btn btn-danger" name="save_btn" data-toggle="tooltip"
                                                                                title="Delete">Delete</button></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="col d-flex justify-content-center">
        <div class="card">
            <div class="card-body px-lg-5 pt-0">
                <h3>Hello Admin, go ahead and change something!</h3>
                <?php
                if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-success text-center alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><?php echo $_SESSION['message']; ?></strong></div>
                    <?php unset($_SESSION['message']);
                }
                ?>
                <form method="post" action="admpage.php">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control form-control-sm col-sm-6" id="username"  required value="<?php echo $username ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control form-control-sm col-sm-6" id="email" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control form-control-sm col-sm-6" id="password"
                               required
                               min="7" value="<?php echo $password ?>">
                    </div>
                    <?php if ($edit_state == false) { ?>
                        <button type="submit" class="btn btn-info" name="save_btn" data-toggle="tooltip"
                                title="Save">Save
                        </button>
                    <?php }
                     else{ ?>
                        <button type="submit" class="btn btn-info" name="update_btn" data-toggle="tooltip"
                               title="Update">Update
                        </button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>