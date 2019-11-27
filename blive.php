<?php    session_start(); 

// require './db.php';    ???? where do you need this?
  

if (!isset($_SESSION["un"])){
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

                    <p class="col-md-12"> <strong >message: </strong><?php  echo $_SESSION["chatm"]   ?> </p>
                </div>

        </div>

        <div class="row" style="height:80vh;">

            <!-- chatBox -->
            <div class="col-md-12" id="messages" style="border: 11px groove #2EA44E;border-radius: 21px; background:url('https://www.toptal.com/designers/subtlepatterns/patterns/sports.png'); overflow:scroll; height:70vh; padding:2em">
                                                                                












            </div>


            <!-- Input Box -->
            <div class="col-md-12" style="height:10vh; margin: auto 0; border: 11px groove #2EA44E;border-radius: 21px; background:url('https://www.toptal.com/designers/subtlepatterns/patterns/sports.png');height:10vh; padding:1em;">
                <div class="chat-form">
                    <div class="container ">
                        <form method="post" enctype="multipart/form-data" action="./chatprocessing.php" class="form-horizontal">   <!-- action="./chatprocessing.php" -->
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













    <?php  require './footer.php' ?>



            <!-- json and chat script -->
        <script>
        var from = null, start = 0; url = 'http://triosdevelopers.com/~R.Epistola/brainstorm/chatprocessing.php';

 

        $(document).ready(function(){
            from = '<?php echo $_SESSION["un"]; ?>';
            load();

            $('form').submit(function(e){
                $.POST(url, {
                    message: $('#message').val(),
                    from: from
                    });
                    $('#message').val('')

                return false;
            })
        });

        function load(){
            $.get(url + '?start=' + start, function(result){
                if(result.items){
                    result.items.foreach(item=>{
                        start = item.id;
                        $('#messages').append(renderMessage(item));
                    })
                };
                load();
            });
        }


        function renderMessage(item){
            console.log(item)
        }
        
        
        </script>



        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
        <script src="./main.js" async defer></script>




        
    </body>
</html>