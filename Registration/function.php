 <?php 
 global $connection;
 $connection = mysqli_connect("localhost", "root", "", "registration");

        if($connection) {
            echo "Connected";
        }
        else {
            die("No connection");
        }
?>