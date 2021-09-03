<?php include 'header.php' ?>

<!-- Continut -->
<section class="showcase">
    <div class="container grid">
        <div class="showcase-text">
            <h1>Long Story Short</h1>

            <p>Soon-to-graduate <a href="https://www.link-academy.com/" target="_blank"> LINK ACADEMY</a> PHP Web
                Development, Looking forward for new opportunities in IT. Love to code and always opened to new
                challenges</p>
            <img src="images/CG_preview_rev_1.png" class="image" alt="Cosmin Gherghina">
        </div>

            <?php
            if(isset($_SESSION["usersID"])){
                echo"<h2>Now You can visit my CV</h2>";
            }else{

                echo"<div class='showcase-form card'>
            <h2>Log In</h2>
            <form action='php/login.inc.php' method='POST'>
                <div>
                    <div class='form-control'>
                        <input type='text' name='uid' placeholder='Username/Email'>
                    </div>
                    <div class='form-control'>
                        <input type='password' name='pwd' placeholder='Password'>
                    </div>
                    <button type='submit' name='submit' class='btn btn-primary'>Log In</button>
                    <button><a href='signup.php'  class='btn btn-primary'>Register</a></button>
                </div>
            </form>";
            }
            ?>
        </div>
        <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == "emptyinput"){
                echo "<p>Te rog completeaza toate campurile</p>";
            }
            elseif ($_GET['error']== "wronglogin"){
                echo "<p>Datele de logare sunt incorecte!</p>";
            }
        }
        ?>
</section>

<!-- Languages -->
<section class="languages">

    <h2 class="md text-center my-1 py-5">
        Welcome to my first Project using the basics HTML, CSS, PHP, MYSQL
    </h2>

    <div class ="container flex">
        <div class="card">
            <h4>HTML</h4>
            <img src="images/icons8-html-5-80.png" alt="">
        </div>
        <div class="card">
            <h4>CSS</h4>
            <img src="images/icons8-css3-80.png" alt="">
        </div>
        <div class="card">
            <h4>PHP</h4>
            <img src="images/icons8-php-logo-80.png" alt="">
        </div>
        <div class="card">
            <h4>mySQL</h4>
            <img src="images/icons8-mysql-logo-80.png" alt="">
        </div>
    </div>

</section>
<?php include 'footer.php'?>