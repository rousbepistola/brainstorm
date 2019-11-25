<?php 
    session_start();
    if ( isset( $_POST["submit"] ) ) {
        $email = strtolower(trim($_POST["logemail"] , " "));
        $pass = $_POST["logpass"];


        require './db.php';


        $sqlSelect = "SELECT * FROM signup where email = '$email'";
        $result = $conn->query($sqlSelect);
        if ($result->num_rows == 0) {
                $_SESSION["er"] = "Your email is wrong!";
                header("Location: index.php?wrongEmail");
                
        } else {
            while($row = $result->fetch_assoc()) {
                $_SESSION["fn"] = $row["name"];
                $_SESSION["un"] = $row["username"];
                $_SESSION["em"] = $row["email"];
                $_SESSION["uid"] = $row["uid"];
                $passFromDb = $row["pwd"];
            
            if (password_verify($pass, $passFromDb)){
                header("Location: ./blive.php?succesfulLogin!");
            }
            else {
                $_SESSION["er"] = "Your password is wrong!";
                session_destroy();
                header("Location: index.php?passwordIncorrect");
                
            }
        }
        }
        $conn->close();
    }
?>