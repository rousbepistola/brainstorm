<?php 
session_start();

if(isset($_POST['send'])){
    // echo "works til here1";
    require './db.php';


// echo "works til here2";

        // if(!isset($_SESSION["chatm"])){
            $_SESSION["chatm"] = $_POST["chat"];
        // } 


$result = array();
$message = isset($_SESSION["chatm"]) ? $_SESSION['chatm'] : null;
$from = $_SESSION['un'];


// echo "works here 3 :)";

// echo $from;

    $sql = "INSERT INTO chat(messages, username) VALUES ('$message','{$_SESSION["un"]}')";

    if (($result = $conn->query($sql)) === TRUE) {
        //
        header("Location: ./blive.php?succesfulInsertionOnDb");
        
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            // header("Location: ./blive.php?errorOnThisPageDbNotInserted");
        }

        
        // $start = isset($_GET['start']) ? intval($_GET['start']) : 0;
        // $items = $conn->query("SELECT * FROM chat WHERE cid > " . $start);
        // while($row = $items -> fetch_assoc()){
        //     $result ['items'][] = $row;
        // }


        $conn->close();


        // header('Access-Control-Allow-Origin: *');
        // header('Content-Type: application/json');
        // echo json_encode($result);
        // header("Location: ./blive.php?succesfulInsertionOnDb");
        // header("Location: ./blive.php");


    }
?>