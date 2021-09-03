<?php include 'header.php'?>
ses
<section class="features-head bg-primary">
    <div class="container ">
        <div>
            <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyinput"){
                    echo "<h1 class='xl'>Te rog completeaza toate campurile</h1>";
                }
                elseif ($_GET['error']== "invalidUsername"){
                    echo "<h1 class='xl'>Username nu este corect</h1>";
                }
                elseif ($_GET['error']== "invalidEmail"){
                    echo "<h1 class='xl'>Email-ul nu este corect</h1>";
                }
                elseif ($_GET['error']== "passworddontmatch"){
                    echo "<h1 class='xl'>Parolele nu sunt identice</h1>";
                }
                elseif ($_GET['error']== "stmtfailed"){
                    echo "<h1 class='xl'>Ceva nu a mers te rog revino</h1>";
                }
                elseif ($_GET['error']== "usernametaken"){
                    echo "<h1 class='xl'>Username nu este disponibil</h1>";
                }
                elseif ($_GET['error']== "passwordtosmall") {
                    echo "<h1 class='xl'>Parola trebuie sa aiba minim 6 caractere</h1>";
                }
                elseif ($_GET['error']== "none"){
                    echo "<h1 class='xl'>Te-ai inscris cu succes</h1>";
                }
                elseif (!isset($_GET['error'])){
                    echo "<h1 class='xl'>Te rog sa introduci toate datele</h1>";
                }else{
                    echo'<h1 class="xl">Sign Up</h1>
            <p class="lead">
                If you are curious to see my full portfolio you have to Sign Up
            </p>';
                }
            }

            ?>

        </div>
    </div>
<section style="background-color: white">
    <div class="flex">
        <div class="showcase-text ">
            <div class="showcase-form card register">
                <h2>Sign Up</h2>
                <form action="php/signup.inc.php" method="POST">
                    <div>
                        <div class="form-control">
                            <input type="text" name="nume" placeholder="Full Name">
                        </div>
                        <div class="form-control">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-control">
                            <input type="text" name="uid" placeholder="Username">
                        </div>
                        <div class="form-control">
                            <input type="password" name="pwd" placeholder="Password">
                        </div>
                        <div class="form-control">
                            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php' ?>
