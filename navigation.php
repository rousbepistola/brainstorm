<!-- navigation -->
<div class="nav" style="z-index:5">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <div class="nav-title">
                Brainstorm Live
                </div>
            </div>
            <div class="nav-btn">
                <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
                </label>
            </div>
            
            <div class="nav-links">
                <a href="./index.php"  >Home</a>
                <a href="./signup.php"  >Signup</a>
                <a href="./blive.php"  >B-Live!</a>

                <a>
                    <?php 
                          session_start();
                          if (isset($_SESSION['fn'])){ //there is  session
                          echo '
                          <form action="./logout.php" id="log-form" method="post">
                                <input type="submit" name="submit "class="btn btn-primary text-center" style:"margin: auto; width:160px; padding: 0 auto;" value="Log out">
                          </form>
                        ';
                          } 
                    ?>
                </a>

            </div>


            


            
        </div> 