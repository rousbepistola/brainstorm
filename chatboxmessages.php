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

                
                    if ($chatName == $_SESSION["un"]){
                        $sample .= '<tr class="getdata" style="background:lightgreen; text-align:center; ">
                        <th scope="row">'.$chatName.'</th>
                        <td>'.$chatMessage.'</td>
                        <td><i><small>'.$chatTime.'</i></small></td>
                        </tr>';
                    } else {
                        $sample .= '<tr class="getdata" style="background:lightblue; text-align:center; border-radius:50">
                        <th scope="row">'.$chatName.'</th>
                        <td>'.$chatMessage.'</td>
                        <td><small><i>'.$chatTime.'</i></small></td>
                        </tr>';
                    }
                }
            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                // header("Location: ./blive.php?errorOnThisPageDbNotInserted");
                
            }

    }

            $conn->close();

            ?>
