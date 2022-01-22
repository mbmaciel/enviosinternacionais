<?php


if ($_SERVER['HTTP_HOST'] == 'localhost:8080') {
    define('DB_HOST', '127.0.0.1');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'enviosinternacionais');
} else {
    define('DB_HOST', 'localhost');
    define('DB_USER', 'envios');
    define('DB_PASS', 'tvpepe46');
    define('DB_NAME', 'enviosinternacionais');
}




?>





