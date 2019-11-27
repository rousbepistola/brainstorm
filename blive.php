<?php    session_start(); 

require './db.php';
  

if (!isset($_SESSION["em"])){
    header("location: index.php?loginRequired");
}











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
                </div>

        </div>

        <div class="row" style="height:80vh;">

            <!-- chatBox -->
            <div class="col-md-10" style="border: 11px groove #2EA44E;border-radius: 21px; background:url('https://www.toptal.com/designers/subtlepatterns/patterns/sports.png'); overflow:scroll; height:70vh;">
                                                                                <!-- left for others -->








                                                                                <!-- right for user -->












            </div>


            <!-- whosOnline box -->
            <div class="col-md-2" style="border: 11px groove #2EA44E;border-radius: 21px;background:url('https://www.toptal.com/designers/subtlepatterns/patterns/sports.png');">
            
            </div>


            <!-- Input Box -->
            <div class="col-md-12" style="height:10vh; margin: auto 0; border: 11px groove #2EA44E;border-radius: 21px; background:url('https://www.toptal.com/designers/subtlepatterns/patterns/sports.png');height:10vh;">
                <div class="chat-form">
                    <div class="container ">
                        <form method="post" enctype="multipart/form-data" action="./chatprocessing.php" class="form-horizontal">
                            <div class="row" >
                            <div class="col-sm-10 col-xs-8">
                                <input type="text" name="chat" class="form-control" id="" placeholder="Message" />
                            </div>
                            <div class="col-sm-2 col-xs-4">
                                <button name="send" type="submit" class="btn btn-success btn-block">Send</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>

    </div>














    <?php  require './footer.php' ?>
        

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
        <script src="./main.js" async defer></script>
        
    </body>
</html>