
 <?php    session_start();  ?>  
 
 <?php require './head.php';?>

    <body>
    <?php require './navigation.php';?>
    

    <div class="container" style="box-sizing:border-box; margin: auto; padding:auto;-webkit-box-shadow: 5px 5px 15px 5px #FF8080, -9px 5px 15px 5px #FFE488, -7px -5px 15px 5px #8CFF85, 12px -5px 15px 5px #80C7FF, 12px 10px 15px 7px #E488FF, -10px 10px 15px 7px #FF616B, -10px -7px 27px 1px #8E5CFF, inset -2px -1px 11px 50px rgba(64,238,255,0); 
                box-shadow: 5px 5px 15px 5px #FF8080, -9px 5px 15px 5px #FFE488, -7px -5px 15px 5px #8CFF85, 12px -5px 15px 5px #80C7FF, 12px 10px 15px 7px #E488FF, -10px 10px 15px 7px #FF616B, -10px -7px 27px 1px #8E5CFF, inset -2px -1px 11px 50px rgba(64,238,255,0); ">
        <div class="row" style="height:auto; margin:2rem">

            <div id="signupAvatar" class="col-md-12" style="text-align:center; width:350px; height:auto; ">
            <div style="height:10vh"></div>
            
                    <!-- <img class="col-sm-4 col-md-4 signupavatar" style="border-radius:50%; margin: 1rem; padding:auto; width:200px; height:auto" src="./media/signupimage1.png" alt="cartoon avatar image">
                    <img class="col-sm-4 col-md-4 signupavatar" style="border-radius:50%; margin: 1rem; padding:auto;width:200px; height:auto" src="./media/signupimage2.png" alt="cartoon avatar image"> -->
                    <img class="col-sm-4 col-md-4 signupavatar" style="border-radius:50%; margin: 1rem; padding:auto;  width:250px; height:auto;" src="./media/signupimage3.png" alt="cartoon avatar image">
                    <!-- <img class="col-sm-4 col-md-4 signupavatar" style="border-radius:50%; margin: 1rem; padding:auto;  width:150px; height:auto" src="./media/signupimage4.png" alt="cartoon avatar image"> -->

            </div>
            <div class="col-md-2"></div>


            <div class="col-md-8">
         
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2" style=" margin:auto;">
                

            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="./signupvalidation.php" style="text-align:justify; padding:auto;">
                <br>
                <fieldset>
                <legend>Sign Up Yeah!</legend>			
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name - AHUH!</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email - No Spam Here!</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username - Be Younique! </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password !%#$@ </label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" name="signup" class="btn btn-info btn-lg btn-block login-button" value="Register"/>
						</div>
                    </fieldset>
                    <div style="height:10vh"></div>
            </form>

                </div>

            </div>
        
        <div class="col-md-2"></div>

            


        </div>

    </div>










    <?php  require './footer.php' ?>
        

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
        <script src="./main.js" async defer></script>
        
    </body>
</html>