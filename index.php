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
                <li><a href="aboutme.php">About Me</a></li>
                <?php
                if (isset($_SESSION["usersID"])) {
                    echo "<li><a href='profil.php'>Profil </a></li>";
                    echo "<li><a href='php/logout.inc.php'>Log Out</a></li>";
                } else {
                    echo "<li><a href='signup.php'>Sign Up </a></li>";
                    echo "<li><a href='login.php'>Log In</a></li>";
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
    <div class="container">
        <h3 class="stats-heading text-center my-1">
            Welcome to my first Project using the basiscs HTML, CSS, PHP, MYSQL
        </h3>
        <div class="grid grid-5 text-center my-4">
            <div>
                <i class="fab fa-html5 fa-3x"></i>
                <h3>HTML</h3>
            </div>
            <div>
                <i class="fab fa-css3-alt fa-3x"></i>
                <h3>CSS</h3>
            </div>
            <div>
                <i class="fab fa-php fa-3x"></i>
                <h3>PHP</h3>
            </div>
            <div>
                <i class="fas fa-database fa-3x"></i>
                <h3>mySQL</h3>
            </div>
            <div>
                <i class="fab fa-js-square fa-3x"></i>
                <h3>JavaScript</h3>
            </div>
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
                <li><a href="index.php">About Me</a></li>
                <li><a href="index.php">Login</a></li>
                <li><a href="index.php">Register</a></li>
            </ul>
            <div class="social">
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="#"><i class="fab fa-github fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            </div>
        </nav>
    </div>
</footer>
</body>
</html>