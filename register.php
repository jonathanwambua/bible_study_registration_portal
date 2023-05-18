<?php

/**
 * @author Jonathan Wambua
 * @link https://github.com/jonathanwambua
 * @phoneNumber: +254719463736
 */

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, This login does not run on a PHP version smaller than 7.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs for db
require_once("config/db.php");

// load the registration class
require_once("classes/Registration.php");

$registration = new Registration();

// show the register form
include("views/register.php");
