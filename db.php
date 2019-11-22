  
<?php
        $servername = "https://www.siteground.com/";
        $username = "rousbepistola@yahoo.com";
        $password = "3te5hrlns2gYrous!";
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "We're good!";
        }
        mysqli_select_db($conn,"db9pfdvpmjs2at");

?>