<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT', 
    'http://localhost/website/ThirdProject/public/');
} else {
    define('ROOT', 
    'https://www.yourwebsite.com');
    
}
