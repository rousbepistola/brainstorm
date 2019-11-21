<!DOCTYPE html>

   <?php require './head.php';?>
   
    <body>

    <?php require './navigation.php';?>
    
    <!-- banner -->
        <div  class="col md 12" id="bannerHome"></div>  


    <!-- login for existing users -->

    <div class="container-fluid" style="margin:2rem auto; ">
            <div class="row">
                <div class="col-md-1"></div>
                
                <div class="col-md-4"><img style="width:100%; height:auto"  src="./media/loginpicture.png" alt="Login Avatar"></div>

                <div class="col-md-6" >
                    <form action="#" method="post" style="text-align:center; margin: 3rem 1.5rem;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input style="-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); box-shadow: 0px 5px 7px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);width:70%; text-align:center; margin:0 auto;" 
                        type="email" class="form-control" id="exampleInputEmail1" name="loginEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input style="-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); box-shadow: 0px 5px 7px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);width:70%; text-align:center;margin:0 auto;"
                         type="password" class="form-control" id="exampleInputPassword1" name="loginPassword" placeholder="Password">
                    </div>

                    <button style="-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);" type="submit" class="btn btn-primary">Submit</button>
                    <small style="margin-top:1rem;  " id="signupHelp" class="form-text text-muted"><a style="color:inherit" href="#">No account with us? sign-up here</a></small>    
                </form>
                </div>


                <div class="col-md-1"></div>
            </div>
    </div>

<!-- 
    <hr class="border"> -->



    <!-- school logo -->
        <div class="container-fluid">
            <div class="row" style="text-align:center; padding:0.5rem; margin:1.5rem;   font-family: 'montserrat alternative';">
                <div class="col-md-1"></div>
                <div id="header1" class="col-md-10" style="font-size:1.5rem;"> <h1> Trusted more than 300 schools across North America </h1></div>
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <h5>We pride ourselves to helping kids develop outstanding math skills in building participation-based math education training website. </h5>
                </div>
            </div>

            <div class="row" style="text-align:center; padding:0.5rem; margin:1.5rem;   font-family: 'montserrat alternative';">
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-12" >
                    <img data-aos="zoom-in-down" data-aos-delay="50" data-aos-duration="2000"  style="height:15rem; width:auto; border-radius:50%; margin:1.5rem 1rem; -webkit-box-shadow: 7px 7px 37px 1px rgba(0,0,0,0.76); box-shadow: 7px 7px 37px 1px rgba(0,0,0,0.76);" src="./media/school1.png" alt="school logo 1 ">
                    <img data-aos="zoom-in-down" data-aos-delay="350" data-aos-duration="2000" style="height:15rem; width:auto; border-radius:50%; margin:1.5rem 1rem; -webkit-box-shadow: 7px 7px 37px 1px rgba(0,0,0,0.76); box-shadow: 7px 7px 37px 1px rgba(0,0,0,0.76);" src="./media/school3.png" alt="school logo 3">
                    <img data-aos="zoom-in-down" data-aos-delay="700" data-aos-duration="2000" style="height:15rem; width:auto; border-radius:50%; margin:1.5rem 1rem; -webkit-box-shadow: 7px 7px 37px 1px rgba(0,0,0,0.76); box-shadow: 7px 7px 37px 1px rgba(0,0,0,0.76);" src="./media/school2.png" alt="school logo 2">
                </div>
                <!-- <div class="col-md-1"></div> -->
            </div>

        </div>

    <!-- home page information middle -->
        <div class="container-fluid" >
            <div class="row" >
                <div class="col-md-1"></div>

                <div class="col-md-5" id="homeMessage1" style="text-align:justify; margin:1.5rem; ">
                    <h3 style="position:relative; top:22%">Better Learning Engagement</h3>
                    <p style="line-height:3rem; text-align:justify;position:relative; top:25%; margin: 0 1rem">
                        &nbsp;&nbsp;&nbsp;Some things can be hard to say out loud while learning. If you need a little help and one-on-one 
                        time with someone or a community who gets how to compute for something, you can connect directly with brainstorm students
                        through Live Chat.
                    </p>

                </div>

                
                <div class="col-md-5" id="homeImage1"><img style="width:100%; height:600px; padding: 0 1rem; margin-top: 3rem" src="./media/teamwork.png" alt="image representation of teamwork"></div>

                <div class="col-md-1"></div>
            </div>
        </div>

<br><br><br><br>
<!-- <hr class="border"> -->
    <!-- selling points section -->

    <div class="container-fluid" style="margin-top:5rem;">
        <div class="row" style="text-align:center; height:60vh;">
            <div class="col-md-1"></div>
            <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="150" data-aos-duration="2000"> <img style="width:100%; height:auto" src="./media/bp01.png" alt="selling point image 1"></div>
            <div class="col-md-6" data-aos="zoom-in-down" data-aos-delay="850" data-aos-duration="2000"> <h3 style="margin:35% 10%">Complete each Test to earn <span style="color:salmon">BP</span> and increase your rank</h3></div>
            <div class="col-md-1"></div>
        </div>

        <div class="row" style="text-align:center; height:60vh;">
            <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="850" data-aos-duration="2000"><h3 style="margin:55% 10% 25% 10%">Meet new friends </h3></div>
            <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="150" data-aos-duration="2000"> <img style="width:100%; height:auto" src="./media/bp02.png" alt="selling point image 2"></div>
            <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="850" data-aos-duration="2000"><h3 style="margin:45% 10%">Race with them to get the highest brainstorm-Live<span style="color:salmon">Rank</span> and have fun!</h3></div>
            
        </div>

        <div class="row" style="text-align:center; ">
            <div class="col-md-1"></div>
            <div class="col-md-6" data-aos="zoom-in-down" data-aos-delay="850" data-aos-duration="2000"><h3 style="margin:35% 10%">Use our site for your own <span style="color:salmon">growth!</span> it is free! share it with friends for more competition</h3></div>
            <div class="col-md-4" data-aos="zoom-in-down" data-aos-delay="150" data-aos-duration="2000"> <img style="width:100%; height:auto" src="./media/bp03.png" alt="selling point image 3"></div>
            <div class="col-md-1"></div>
        </div>


    </div>

<div style="height:20vh"> </div>

   <?php  require './footer.php' ?>
        

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
        <script src="./main.js" async defer></script>
        
    </body>
</html>



<!-- you can do this you bastard! -->