<?php
try {
    $dsn = 'mysql:host=127.0.0.1;dbname=geekroom';
    $link = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
    echo "ERROR: ". $e->getMessage();
}

?>