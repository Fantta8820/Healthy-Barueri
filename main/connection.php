<?php
try {
    $connection = new PDO('mysql:host=localhost;dbname=clinica', 'root', '');
} catch (PDOException $e) {
    echo 'An error has been encountered' . $e->getMessage();
}
?>