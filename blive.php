<?php    session_start(); 

// require './db.php';    ???? where do you need this?
  

if (!isset($_SESSION["un"])){
    header("location: index.php?loginRequired");
}

if(!isset($_SESSION['time'])){
    $_SESSION['time'] = date('Y-m-d h:i:s', time());
};

?>  
 
 <?php require './head.php';?>

    <body>
    <?php require './navigation.php';?>




    <div class="container" style="height:auto; ">
        <div class="row" style="height:auto; border-bottom:solid 3px salmon; ">
            
                <img class="col-md-3" style="width:120px; border-radius:50%; margin:50px auto;" 
                src="./media/signupimage4.png" alt="chat avatar">
            
                <div class="col-md-5" style="padding: auto; margin:5%;">
                    <p class="col-md-12" > <strong >Name: </strong><?php  echo $_SESSION['fn']   ?> </p>
                    <p class="col-md-12"> <strong >Username: </strong><?php  echo $_SESSION['un']   ?> </p>
                    <p class="col-md-12"> <strong >Email: </strong><?php  echo $_SESSION['em']   ?> </p>

                    <p class="col-md-12"> <strong >message: </strong><?php  echo $_SESSION["chatm"]   ?> </p>
                </div>

        </div>

        <div class="row" style="height:80vh;">

            <!-- chatBox -->
            <div class="col-md-12" id="messages" style="border: 11px groove #2EA44E;border-radius: 21px; background:url('https://www.toptal.com/designers/subtlepatterns/patterns/sports.png'); overflow:scroll; height:70vh; padding:2em">
                                                                                

<?php

        $sqlDetails = "SELECT * FROM `chat` WHERE `created` >= {$_SESSION['time']} ORDER BY `created`";
            
            if ($resultDetails = $conn->query($sqlDetails)) {
                while ($row = $resultDetails->fetch_assoc()) {
                    $_SESSION['chatName'] = $row['username'];
                    $_SESSION['chatMessage'] = $row['messages'];
                    $_SESSION['chatTime'] = $row['created'];
                    $_SESSION['chatId'] = $row['cid'];
                }
            }


          echo  '<table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Message</th>
              <th scope="col">Time</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
          </tbody>
        </table>'






?>
            </div>


            <!-- Input Box -->
            <div class="col-md-12" style="height:10vh; margin: auto 0; border: 11px groove #2EA44E;border-radius: 21px; background:url('https://www.toptal.com/designers/subtlepatterns/patterns/sports.png');height:10vh; padding:1em;">
                <div class="chat-form">
                    <div class="container ">
                        <form method="post" enctype="multipart/form-data" action="./chatprocessing.php"  class="form-horizontal">   <!-- action="./chatprocessing.php" -->
                            <div class="row" >
                            <div class="col-sm-10 col-xs-8">
                                <input type="text" name="chat" class="form-control" id="message" placeholder="Message" />
                            </div>
                            <div class="col-sm-2 col-xs-4">
                                <input name="send" type="submit" class="btn btn-success btn-block" value="Send">
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>

    </div>













    <?php  
    require './footer.php';

    ?>



            <!-- json and chat script -->
        <script>
            $("input:text:visible:first").focus();

        // var from = null, start = 0; url = 'http://triosdevelopers.com/~R.Epistola/brainstorm/chatprocessing.php';

 

        // $(document).ready(function(){
        //     from = '';
        // <?php // echo $_SESSION["un"]; ?>
        //     load();

        //     $('form').submit(function(e){
        //         $.post(url, {
        //             message: $('#message').val(),
        //             from: from
        //             });
        //             $('#message').val('')
        //             return false;
        //             console.log("Here0");
        //     })
        // });

        // function load(){
        //     $.get(url + '?start=' + start, function(result){
        //         if(result.items){
        //             result.items.foreach(item =>{
        //                 console.log("Here1");
        //                 start = item.id;
        //                 $('#messages').append(renderMessage(item));
        //             })
        //         };
        //         console.log("Here3");
        //         load();
        //     });
        // }


        // function renderMessage(item){
        //     console.log("Here4");
        //     console.log(item);
        // }
        
        
        </script>



        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
        <script src="./main.js" async defer></script>




        
    </body>
</html>