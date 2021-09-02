<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Cosmin Gherghina</title>
</head>
<body>
<div class="navbar">
    <div class="container flex">
        <h1 class="logo">Cosmin Gherghina</h1>
        <nav>
            <ul>
                <li><a href="index.php"> Home</a></li>
                <li><a href="About.php">About Me</a></li>
                <?php
                if (isset($_SESSION["usersID"])) {
                    echo "<li><a href='profil.php'>Profil </a></li>";
                    echo "<li><a href='php/logout.inc.php'>Log Out</a></li>";
                } else {
                    echo "<li><a href='signup.php'>Sign Up </a></li>";
                }
                ?>

            </ul>
        </nav>
    </div>
</div>
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
        <div class="showcase-form card">
            <h2>Log In</h2>
            <form>
                <div action="php/login.inc.php" method="POST">
                    <div class="form-control">
                        <input type="text" name="uid" placeholder="Username/Email">
                    </div>
                    <div class="form-control">
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Log In</button>
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </div>
            </form>

        </div>
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
<footer class ="footer bg-secondary py-5">
    <div class ="container grid grid-3">
        <div>
            <h1>Cosmin Gherghina</h1>
            <p>Copyright &copy; 2021</p>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About Me</a></li>
                <li><a href="Register.php">Register</a></li>
            </ul>
        </nav>
            <div class="social">
                <a href="https://www.facebook.com/gherghina.cosmin"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="https://www.linkedin.com/in/gcosmin/"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="https://github.com/gcosmin1989"><i class="fab fa-github fa-2x"></i></a>
                <a href="https://www.instagram.com/this.cosmin/"><i class="fab fa-instagram fa-2x"></i></a>
            </div>

    </div>
</footer>
</body>
</html>