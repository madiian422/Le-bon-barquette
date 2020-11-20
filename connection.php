<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=resto', 'root', '');
} catch (exception $e) {
    die('Erreur ' . $e->getMessage());
}
