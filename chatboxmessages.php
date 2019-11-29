<?php
session_start(); 
require './db.php';




if (isset( $_SESSION["chatm"])){


                                                // connecting to get cid

            $sqlDetail = "SELECT cid FROM chat WHERE created >= '{$_SESSION["time"]}' ORDER BY cid asc limit 1";

            if($resultDet = $conn->query($sqlDetail)) {



                while($row = $resultDet->fetch_assoc())  {


                    echo "<script>console.log('insideWhile1!!')</script>";

                    if(!isset($_SESSION['initialCid'])){
                         $_SESSION['initialCid'] = $row['cid'];
                    }
                }
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                // header("Location: ./blive.php?errorOnThisPageDbNotInserted");
                
            }
        







                                                // connecting to create tables

            // $sqlDetails = "SELECT * FROM chat WHERE created >= '{$_SESSION["time"]}' ORDER BY created asc";
        
        $sqlDetails = "SELECT * FROM chat WHERE cid >= '{$_SESSION['initialCid']}'";
            

            if($resultDetails = $conn->query($sqlDetails)) {
                while($row = $resultDetails->fetch_assoc())  {


                    echo "<script>console.log('insideWhile2!!')</script>";

                    $chatName = $row['username'];
                    $chatMessage = $row['messages'];
                    $chatfrom = $row['cfrom'];
                    $chatTime = $row['created'];
                    $chatId = $row['cid'];

                
                    $sample .= '<tr>
                    <th scope="row">'.$chatName.'</th>
                    <td>'.$chatMessage.'</td>
                    <td>'.$chatTime.'</td>
                    </tr>';
                }
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                // header("Location: ./blive.php?errorOnThisPageDbNotInserted");
                
            }

    }

            $conn->close();

            ?>
