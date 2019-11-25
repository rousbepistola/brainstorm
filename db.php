  
<?php
        $servername = "localhost";
        $username = "R.Epistola";
        $password = "75ZFdHZT";
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
           // echo "We're gooda!";
        }
        mysqli_select_db($conn,"repistoladb");

?>
