<?php 


session_start();
require './db.php';

if (isset($_POST["send"])) {


    $_SESSION['chatMessage'] = $_POST['chat']; 


   //  $sqlSelect = "SELECT * FROM signup where username = '{$_SESSION["un"]}'";



   //  $sqlDetails = "SELECT * FROM signup inner join WHERE username = {$_SESSION["un"]}";
      
   

}
?>