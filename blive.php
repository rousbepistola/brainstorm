<?php    session_start(); 

// require './db.php';    ???? where do you need this?
  

if (!isset($_SESSION["un"])){
    header("location: index.php?loginRequired");
}

if(!isset($_SESSION['time'])){
    // $_SESSION['time'] = date('Y-m-d H:i:s', time());


    $_SESSION['time'] = (new DateTime('America/New_York'))->format('Y-m-d H:i:s');
};

?>  
 
 <?php require './head.php';?>

    <body >
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

        <div  class="row" style="height:80vh;">

            <!-- chatBox -->
            <div  class="col-md-12" id="messages" style="border: 11px groove #2EA44E;border-radius: 21px; background:url('https://www.toptal.com/designers/subtlepatterns/patterns/sports.png'); overflow:scroll; height:70vh; padding:2em">

             <?php require './chatboxmessages.php';?>

        

         <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Message</th>
              <th scope="col">Time</th>
            </tr>
          </thead>
          <tbody >
        <?php  echo "$sample"; ?>
          </tbody>
        </table>
        


            </div>

        </div>


            <!-- Input Box -->
            <div class="col-md-12" style="height:10vh; margin: auto 0; border: 11px groove #2EA44E;border-radius: 21px; background:url('https://www.toptal.com/designers/subtlepatterns/patterns/sports.png');height:10vh; padding:1em;">
                <div class="chat-form">
                    <div class="container ">
                        <form method="post" enctype="multipart/form-data" action="./chatprocessing.php" autocomplete="off"  class="form-horizontal">   <!-- action="./chatprocessing.php" -->
                            <div class="row" >
                            <div class="col-sm-10 col-xs-8">
                                <input type="text" name="chat" class="form-control" id="message" placeholder="Message"  />
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
          

        // $(document).ready(function() {
        //     $("#responsecontainer").load("chatboxmessages.php");
        // var refreshId = setInterval(function() {
        //     $("#responsecontainer").load('chatboxmessages.php');
        // }, 9000);
        // $.ajaxSetup({ cache: false });
        // });





        // var cacheData;
        // var data = $('#responsecontainer').html();
        // var auto_refresh = setInterval(
        // function ()
        // {
        //     $.ajax({
        //         url: 'blive.php',
        //         type: 'POST',
        //         data: data,
        //         dataType: 'html',
        //         success: function(data) {
        //             if (data !== cacheData){
        //                 //data has changed (or it's the first call), save new cache data and update div
        //                 cacheData = data;
        //                 $('#responsecontainer').fadeOut("fast").html(data).fadeIn("fast");
        //             }           
        //         }
        //     })
        // }, 3000); // check every 30000 milliseconds





            $("input:text:visible:first").focus();

            var $chatt = $("#messages");
            $chatt.scrollTop($chatt.height());


        
        </script>



        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
        <script src="./main.js" async defer></script>




        
    </body>
</html>