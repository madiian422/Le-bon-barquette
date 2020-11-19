<?php
session_start();

$database = new PDO('mysql:host=localhost; dbname=nouvelle_base', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

$name = '';
$prix = '';
$description = '';

// pour l'encodage // $db =new PDO("mysql:host=127.0.0.1;dbname=expernetbdd","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];



    $database->query("INSERT INTO data (name, prix, description) VALUES ('$name','$prix','$description') ");

    $_SESSION['message'] = "Enregistrement sauvegardé ! ";
    $_SESSION['msg_type'] = "success ";

    header("location:crud.php");

    // $table = $database->prepare("INSERT INTO data (name,prix,description) VALUES ('$name','$prix','$description' ");
    // $table->execute();
    // $table_bdd = $table->fetchall();

}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $database->exec("DELETE FROM data WHERE id = '$id'");


    $_SESSION['message'] = "Enregistrement effacé ! ";
    $_SESSION['msg_type'] = "success ";

    header("location:crud.php");
}

// if (isset($_GET['edit'])) {
//     $id = $_GET['id'];
//     $result = $database->query("SELECT * FROM data WHERE id=$id ");

//     if (count($result) == 1) {
//         $row = $result->fetch();
//         $name = $row['name'];
//         $prix = $row['prix'];
//         $description = $row['description'];
//     }
// }
