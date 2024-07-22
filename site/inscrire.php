<?php

if(isset($_POST['inscription'])){
 $nom=htmlspecialchars($_POST['nom']);
 $email=htmlspecialchars($_POST['email']);
 $pswd=htmlspecialchars($_POST['pswd']);
 $Cpswd=htmlspecialchars($_POST['Cpswd']);
 $db=mysqli_connect("localhost","root","","sitephp");
        if($pswd==$Cpswd){
            
            $req=mysqli_query($db,"INSERT INTO connexion (nom, email, motpasse) VALUES ('$nom', '$email', '$pswd')");
            if($req){
                echo "<script type='text/javascript'> alert('succès le compte est crée !')</script>";
                header("location:pageutilisateur.php");
                }
            }else{
                echo "<script type='text/javascript'> alert('comfermer le mot de passe !')</script>";
            }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleconx.css">
</head>
<body>

    <div class="contSingup">
<div class="forumsign-up">
                  <h1 class=inscription>Inscription</h1>
                  <form method="POST">
                      <label>Nom&Prénom</label>
                      <input type="text" name="nom" require>
                      <label>Adresse e-mail</label>
                      <input type="text" name="email" require>
                      <label>Mot de Passe</label>
                      <input type="password" name="pswd" require>
                      <label>Confirmer Mot de Passe</label>
                      <input type="password" name="Cpswd" require>
                   
                      <input class="btn" type="submit" name="inscription" value="Sign Up">
                      <p class="link">vous avez déjà un compte? <a href="connexion.php">Connexion</a> here</p>
                  </form>
              </div>
    
    
      <div class="imgSingup">
       
          <h1>Nouveau ici?</h1>
          <p>Inscrivez-vous et découvrez une grande quantité de nouveaux services !</p>
       
        
      </div>
</div>


</body>
</html>