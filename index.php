<?php

/**
 * @author Jonathan Wambua
 * @link https://github.com/jonathanwambua
 * @phoneNumber: +254719463736
 */

// Check php version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, This login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs for db
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

$login = new Login();

// Is user already logged in?
if ($login->isUserLoggedIn() == true) {
        include("views/logged_in.php");
    } else {
        include("views/not_logged_in.php");
    }

