<?php 

session_start();
require './db.php';

if (isset($_POST["signup"])) {
   
    $_SESSION['fn'] = filter_var(trim( $_POST["name"], " "),FILTER_SANITIZE_STRING);
    $_SESSION['un'] = strtolower(trim( $_POST["username"], " "));
    $_SESSION['em'] = filter_var(trim($_POST["email"], " "),FILTER_SANITIZE_STRING);
    $_SESSION['pass'] = password_hash($_POST["password"],PASSWORD_DEFAULT);
    
    $sqlSelect = "SELECT * FROM signup where email = '{$_SESSION["em"]}'";
    
    $result = $conn->query($sqlSelect);
    if ($result->num_rows > 0) {
       $_SESSION["er"] = "Email already exists. Please try a different email address.";
       header("Location: index.php");
    } else {
       $sqlInsert = "INSERT INTO signup (uid, name, username, email, password)
             VALUES (null, '{$_SESSION["fn"]}', '{$_SESSION["un"]}', '{$_SESSION["em"]}', '{$_SESSION["pass"]}')";
       if ($conn->query($sqlInsert) === TRUE) {
       //
       header("Location: ./blive.php?succefulInsertionOnDb");
       echo "success Ya!!";
       } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
          header("Location: ./signup.php?errorOnThisPage");
       }
    }
    }

    $conn->close();

    //works til here




























?>