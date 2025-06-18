<?php

    include("database.php");
    /*include("logout_bidder.html");*/

    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['password']);

    header("location: h_public.php");

?>