
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    section {
    position: absolute;
    top: 10px;
    left: 10px;
    
}
button{ background-color:rgba(219, 106, 57, 0.582);
border-radius:20px;
font-size:20px;
color:black;
border:none;}
a{   text-decoration:none;}
body {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
* {
  
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
    box-sizing: border-box;
}
.cont {
    overflow: hidden;
    position: relative;
    width: 800px;
    height:400px;
    background: #fff;
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
}
.forum {
   
    position: relative;
    width:800px;
    height: 100%;
    padding: 40px 30px;
}
h1 {
    text-align: center;
    font-size:20px;
    margin-bottom: 20px;
    border-radius: 10px;
}
p {
   
    top: 100px;
    left: 10px;
    
    padding: 0 20px;
    display: flex;
   width: 100%;
    justify-content: center;
    margin-bottom: 20px;
    color: black;
    font-size: 20px;
    line-height: 1.5;
}
a{
    color:rgba(219, 106, 57, 0.582);

}
</style>
<?php
            session_start();
            $mail= $_SESSION['email'];
            ?> 
<body>
<section> <button><a href="acceuil.php" >retour</a> </button></section>
<div class="cont">  
   <div class="forum">
<form  method="POST" enctype="multipart/form-data">
    <h1>Bienvenue sur  <?=$mail?> Bâtiment et Travaux Publics</h1>
    <p>Vous voulez Demander un produit <a href="reservation.php"> &nbsp;Clique içi</a></p>
    <p>Vous voulez Demander un formation <a href="demandeformation.php">&nbsp; Clique içi</a></p>
    <p>Vous voulez voir les demandes de produit  <a href="commande.php">&nbsp; Clique içi</a></p>
</form>
</div>
</div>
</body>
</html>
