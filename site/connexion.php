<?php

session_start();



if(isset($_POST['connect'])){//si on clique sur se connecter
    //pour tester que les champs n'est pas vide
    if(!empty($_POST['email']) AND !empty($_POST['pswd'])){
        //recupe l'input
        $email=htmlspecialchars($_POST['email']);
        $pswd=htmlspecialchars($_POST['pswd']);
        $message=' ';
        //pour  connect on Mysql
        $_SESSION['email']=$email;
        $db=mysqli_connect("localhost","root","","sitephp") or die(mysqli_connect_error());
        //execute requete
        $resultat=mysqli_query($db, "SELECT * FROM connexion WHERE email='$email' AND  motpasse='$pswd' ");
$num_ligne=mysqli_num_rows( $resultat);
        if($num_ligne>0){
            $row=mysqli_fetch_assoc($resultat);
            $nom=$row['nom'];
      
            $_SESSION['nom']=$nom;
            
          header("Location: pageutilisateur.php");
        }

    else{
        //$message="Adresse Mail ou Mot de passe incorrects !";
        echo "<script type='text/javascript'> alert('Adresse Mail ou Mot de passe incorrects !')</script>";
    }
    
}// else{
//     $message="Veuillez remplir tous les champs";}
mysqli_free_result($resultat);
mysqli_close($db);
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
  <div class="cont">
   
      <div class="forum sign-in">
        <form method="POST" action="">
        <h1>Login</h1>
        <label>Email</label>
        <input type="text" name="email" required>
        <label>password</label>
        <input type="password" name="pswd" required>
        <input  class="btn" type="submit" name="connect" value="Se connecter"><br>
        <?php  
            if (isset($message)) {
              echo $message . "<br/>";
            }
            
        ?>
        <p class="link">vous n'avez pas de compte ?
    <a href="inscrire.php">Inscription </a>here</p><br>
    
  
</form>
</div>
  

<div class="img">
                <h1>Bienvenue à</h1>
                <h2>Bâtiment et Travaux Publics</h2>
                <p>Si vous possédez déjà un compte, il vous suffit de vous connecter. Nous sommes impatients de vous revoir !</p>
               
 </div>
</div>
 
</body>
</html>