<?php 

require_once 'php_action/core.php';

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header('location: https://shakuntalambilling.great-site.net/index.php');

?>