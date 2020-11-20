<?php
if (!isset($_SESSION['idinsc'])&& !isset($_SESSION['nominsc']) && !isset($_SESSION['prenom']) && !isset($_SESSION['tel']) && !isset($_SESSION['adresse']))

$_SESSION['idinsc']="";
$_SESSION['nominsc']="";
$_SESSION['prenom']="";
$_SESSION['tel']="";
$_SESSION['adresse']="";
$_SESSION['login']="";
$_SESSION['ville']="";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
  .register{
    background-image: url("img/carry2.jpg");
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
  </style>
  <body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->
<?php
<<<<<<< HEAD
if (isset($_POST['nom'])){
=======
if (!isset($_POST['nominsc'])){
>>>>>>> 574bd59dfd2ad6f6ef7763efacf9af059011af59
    include("classe/user.php");

    $host="127.0.0.1";
    $dbname= "resto";
    $login = "root";
    $db= new PDO("mysql:host=".$host.";dbname=".$dbname."",$login,"");
    
    
    $nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $tel =$_POST['tel'];
    $adresse =$_POST['adresse'];
    $login =$_POST['login'];
    $password =$_POST['password'];
    $password2 =$_POST['password2'];
    $ville =$_POST['ville'];
<<<<<<< HEAD
=======
    echo $nom;
    echo $prenom;
    echo $tel;
    echo $adresse;
    echo $login;
    echo $password;
>>>>>>> 574bd59dfd2ad6f6ef7763efacf9af059011af59
    if($password2!== $password){
        
        $_SESSION['nominsc']=$_POST['nom']; 
        $_SESSION['prenom']=$_POST['prenom']; 
        $_SESSION['tel']=$_POST['tel'];   
        $_SESSION['adresse']=$_POST['adresse'];  
        $_SESSION['login']=$_POST['login'];  
        $_SESSION['ville']=$_POST['ville'];  
<<<<<<< HEAD
        header("location: inscription");   
    }
    
    
    
    $requete = $db->prepare(' INSERT INTO `utilisateur`(`id`, `nom`, `prenom`, `tel`, `adresse`, `login`, `password`, `ville`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])');
    $requete->bindParam(":id",$id);
    $requete->bindParam(":nom",$nom);
    $requete->bindParam(":prenom",$prenom);
    $requete->bindParam(":tel",$tel);
    $requete->bindParam(":adresse",$adresse);
    $requete->bindParam(":login",$login);
    $requete->bindParam(":password",$password);
    $requete->bindParam(":ville",$ville);
    $requete->execute();
    $requete->setFetchMode(PDO::FETCH_CLASS,'Utilisateur');
    $resultat = $requete->fetchAll();
=======
        header("location: inscription.php");   
    }
    
    
    try{
        $requete = $db->prepare(" INSERT INTO `utilisateur`( `nom`, `prenom`, `tel`, `adresse`, `login`, `password`, `ville`) VALUES (:nom,:prenom,:tel,:adresse,:login,:password,:ville)"  );
  
        $requete->bindParam(":nom",$nom);
        $requete->bindParam(":prenom",$prenom);
        $requete->bindParam(":tel",$tel);
        $requete->bindParam(":adresse",$adresse);
        $requete->bindParam(":login",$login);
        $requete->bindParam(":password",$password);
        $requete->bindParam(":ville",$ville);
        $requete->execute();
        $requete->setFetchMode(PDO::FETCH_CLASS,'Utilisateur');
        $resultat = $requete->fetchAll();
        var_dump($resultat);
    }
    catch(Exeption $er){
        $er="nop";
    }
    if ($er=="nop"){
        header("location: inscription.php");
    }
    else{
        header("location: index.php");
    }
    
>>>>>>> 574bd59dfd2ad6f6ef7763efacf9af059011af59
}



?>
<div class="container register">
<form action="inscription.php" name="ajout" method="post">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="img/fourchette.png" alt=""/>
                        <h3>Connexion</h3>
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Entrez vos informations</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="prenom *" value="<?php echo $_SESSION['prenom'];?>" name="prenom" id="prenom"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="tel *" value="" name="tel" id="tel"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="login *" value="" name="login" id="login"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="password *" value="" name="password" id="password" />
                                        </div>

                                       
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="nom *" value="" name="nom" id="nom" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"  placeholder="adresse *" value="" name="adresse" id="adresse"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="ville *" value="" name="ville" id="ville"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="password *" value="" name="password2" id="password2" />
                                        </div>
                                       
                                       
                                        <input type="submit" class="btnRegister"  value="enregistrer" onclick="checkPass()"/>
                                    </div>
                                </div>
                            </div>
                            
                </form>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function checkPass()
        {
            var champA = document.getElementById("password").value;
            var champB = document.getElementById("password2").value;
            
            if(champA == champB)
            {
                document.form.submit();
            }
            else
            {
                alert("veuillez remplir les champs correctement");
            }
        }
            </script>
  </body>
</html>