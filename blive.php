<?php    session_start(); 

require './db.php';
  

if (!isset($_SESSION["em"])){
    header("location: index.php?loginRequired");
}











?>  
 
 <?php require './head.php';?>

    <body>
    <?php require './navigation.php';?>




    <div class="container" style="height:100vh; width: auto; ">
        <div class="row">
            <div class="col-md-12" style="height:250px; border-bottom:solid 3px salmon;">
                <img  style="width:150px; border-radius:50%; margin:50px 0;" src="./media/signupimage4.png" alt="chat avatar">
                <p> <strong >Name: </strong><?php  echo $_SESSION['fn']   ?> </p>
                <p> <strong >Username: </strong><?php  echo $_SESSION['un']   ?> </p>
                <p> <strong >Email: </strong><?php  echo $_SESSION['em']   ?> </p>
            </div>
        </div>
    </div>














    <?php  require './footer.php' ?>
        

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
        <script src="./main.js" async defer></script>
        
    </body>
</html>