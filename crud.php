<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <?php require_once 'process.php'; ?>

    <?php
    if (isset($_SESSION['message'])) :

    ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <?php
    $database = new PDO('mysql:host=localhost; dbname=nouvelle_base', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $resultat = $database->query("SELECT * FROM data");

    ?>
    <div class="container-fluid">
        <h1>CRUD</h1>
    </div>
    <div class="container pt-5">
        <div class=" row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
                while ($row = $resultat->fetch()) :
                ?>
                    <tr>

                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['prix']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td>
                            <a href="crud.php?edit=<?php echo $row['id'] ?>" class="btn btn-info">Modifier</a>
                            <a href="process.php?delete=<?php $row['id']; ?>" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <form action="process.php" method="POST">
            <div class="form-group">
                <label>Nom du menu</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label for="">Prix</label>
                <input type="number" class="form-control" name="prix" value="<?php echo $prix; ?>">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" rows="5" id="comment" name="description" value="<?php echo $description; ?>"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" name="save">Enregistrer</button>
            </div>
        </form>
    </div>
</body>

</html>