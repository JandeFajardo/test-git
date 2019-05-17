<?php include 'function.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>

<section id="cover">
    <div id="cover-caption">
        <div id="container" class="container">
            <div class="row">
                <div class="log col-sm-6 offset-sm-3 col">
                    <h4 class="text-center">Log in</h4>
                    <div class="info-form">
                        <form class="form-inlin justify-content-center">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="row d-flex justify-content-around">
                            <div class="pull-left"><button type="submit" class="btn btn-secondary btn-outline-light">Login</button></div>
                            <div class="pull-right"><button type="submit" class="btn btn-secondary btn-outline-light" formaction="new_account.php">Create account</button></div>
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