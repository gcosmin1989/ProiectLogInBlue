<?php

//Distrugerea sesiunilor de mentinere logat

session_start();
session_unset();
session_destroy();

header("location: ../index.php");
exit();
