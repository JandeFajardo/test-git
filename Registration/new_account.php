<?php 


    if (isset($_POST['submit'])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        $uFirst_name = $_POST["uFirst_name"];
        $uLast_name = $_POST["uLast_name"];
        $uEmail = $_POST["uEmail"];

        // connect database
        $connection = mysqli_connect("localhost", "root", "", "registration");

        if($connection) {
            echo "Connected";
        }
        else {
            die("No connection");
        }

        // Create new data
        $query = "INSERT INTO login (username, password, password2, uFirst_name, uLast_name, uEmail) VALUES ('$username', '$password', '$password2', '$uFirst_name', '$uLast_name', 'uEmail')";

        $result = mysqli_query($connection, $query);
        if(!$result) {
            die('Query failed' . mysqli_error());
        }

    }
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Create account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<section id="cover">
    <div id="cover-caption">
        <div id="container" class="container">
            <div class="row">
                <div class="log col-sm-6 offset-sm-3 col">
                    <h4 class="text-center">Create account</h4>
                    <div class="info-form">
                        <form method="post" action="index.php" class="form-inlin justify-content-center">
                        	<div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="uFirst_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="uLast_name" placeholder="Last Name">
                            </div>
                             <div class="form-group">
                                <input type="email" class="form-control" name="uEmail" placeholder="Email">
                            </div>

                            <div class="row d-flex justify-content-around">
                            <div class="pull-left"><button type="submit" name="submit" class="btn btn-secondary btn-outline-light">Confirm</button></div>
                            <div class="pull-right"><button type="submit" value="create" class="btn btn-secondary btn-outline-light"><a href="index.php">Sign in</a></button></div>
                            </div>
                        </form>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>