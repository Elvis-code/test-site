<style>
    #searcharea{
        background-color: white;
        border-bottom:2px solid dodgerblue;
    }
    #register{
        background-color: dodgerblue;
        color: white;
        display: inline-block;
        text-align: center;
    }
    #login{
        background-color: red;
        color:white;
        display: inline-block;
        text-align: center;
    }
    #register:hover{
        background-color: blue;
    }
    #login:hover{
        background-color: darkred;
    }
</style>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="https://getbootstrap.com">
        <img src="foto/bootstrap.png" width="40" height="30" alt="">
    </a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="mainpage.php">Home</a>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Other
            </a>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="https://edition.cnn.com/" target="_blank">News</a>
                <a class="dropdown-item" href="https://www.youtube.com/" target="_blank">Music</a>
            </div>
        </li>
        <li class="nav-item ml-5">
            <form class="form-inline">
                <input class="form-control form-control-sm ml-3 " id="searcharea" type="text" placeholder=" Search.." name="search"
                       aria-label="search">
                <button class="btn btn-primary" type="submit"><i class="fa fa-search " aria-hidden="true"></i></button>
            </form>
        </li>
    </ul>
    <!-- Krijimi i dropdown menu dhe about us ne te djathte te navbar permes ml-auto --->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown mr-3">
            <button type="button" class="btn btn-primary dropdown-toggle" id="navbardrop1" data-toggle="dropdown">
                Portal
            </button>
            <div class="dropdown-menu">
                <!-- Krijimi i butona te register dhe login -->
                <a class="dropdown-item" id="register" href="Register.php">Register</a>
                <a class="dropdown-item" id="login" href="login.php">Login</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">About us</a>
        </li>
    </ul>
</nav>

<div class="container">
    <br><br>
    <br>

</div>