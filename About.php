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
<section class="cloud bg-primary my-2 py-2">
    <div class="container grid">
        <div class="text-center">
            <h2 class ="lg">Poze</h2>
            <p class="lead my-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis dignissimos eum incidunt laudantium maiores nostrum nulla officia omnis optio perferendis quae suscipit totam vel, voluptates! Ducimus earum fugiat voluptatum.</p>
        </div>
        <img src="images/DSC_1015.JPG" alt="">
    </div>

</section>
</body>