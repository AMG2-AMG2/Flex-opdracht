<?php
require_once 'src/config.php';
require_once 'src/functions.php';

// Handle the request and route to the appropriate page
if ($_SERVER['REQUEST_URI'] === '/') {
    include 'public/home.php';
} else {
    // Handle other routes here
}
