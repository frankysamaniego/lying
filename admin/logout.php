<?php
session_start();
session_destroy();
unset($_SESSION['accountType']);
unset($_SESSION['loggedIn']);
header("location: ../");
die();
