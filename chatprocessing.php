<?php 


session_start();
require './db.php';

if (isset($_POST["send"])) {


    $_SESSION['chatMessage'] = $_POST['chat']; 


    $sqlSelect = "SELECT * FROM signup where username = '{$_SESSION["un"]}'";



    $sqlDetails = "SELECT * FROM signup inner join WHERE username = {$_SESSION["un"]}";
      
    if ($resultDetails = $conn->query($sqlDetails)) {
       while ($row = $resultDetails->fetch_assoc()) {
          $_SESSION['phone'] = $row['tel'];
          $_SESSION['address'] = $row['address'];
          $_SESSION['city'] = $row['city'];
          $_SESSION['dob'] = $row['bdate'];
          $_SESSION['gender'] = $row['sex'];
          $_SESSION['photo'] = $row['pic'];
       }
   }

}
?>