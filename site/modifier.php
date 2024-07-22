
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
    width: 460px;
    height:550px;
    background: #fff;
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
}
.forum {
   
    position: relative;
    width: 450px;
    height: 100%;
    padding: 40px 30px;
}
h1 {
    text-align: center;
    font-size:20px;
    margin-bottom: 20px;
    border-radius: 10px;
}
input  {
    display: block;
    border: 1px solid rgba(219, 106, 57, 0.582);
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 10px;
 
}

label {
    font-size: 18px;
    padding: 10px;
    color: #888;
}

.btn {
    display: block;
   
    background-color: rgba(219, 106, 57, 0.582);
    border-radius: 10px;
    border: none;
    font-size: 20px;
   
    
}
.btn:hover {
    background: rgba(234, 222, 217, 0.582);
    color: black;
    cursor: pointer;
    font-size: 20px;
}
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
</style>

<?php
    
    if(isset($_GET['id'])){
       
        $id = $_GET['id'];
        session_start();
        $_SESSION['id']=$id;
       
        $db = mysqli_connect('localhost', 'root', '', 'sitephp');
        
        $requet = mysqli_query($db, "SELECT * FROM commande WHERE id='$id'");
       
        if(mysqli_num_rows($requet) > 0){
            
            $ligne = mysqli_fetch_assoc($requet);
    ?>
<body>
<section> <button><a href="pageutilisateur.php" >retour</a> </button></section>
<div class="cont">  
   <div class="forum">
<form  method="POST" action="traitementModif.php"  enctype="multipart/form-data">
    <h1>Modifier la commander les Produits</h1>
        <label> Briques (6,5DH/unité)</label>
     <input type="number" name="brique" min="0"value="<?php echo   $ligne ['Briques'];?>">
       <label>Ciment (80 DH/25Kg)</labe>
           <input type="number" name="ciment" min="0" value="<?php echo $ligne ['Ciment'];?>">
           <label>Acier nervuré (23 DH/1Kg)</label>
          <input type="number" name="acier"  min="0"value="<?php echo $ligne ['acier'];?>">
         
            <label>Parpaing (8 DH/unité)</label>
           <input type="number" name="parpaing"min="0" value="<?php echo$ligne ['Parpaing']?>">
        
            <label>Planches (30 DH/unité)</label>
          <input type="number" name="planches"min="0" value="<?php echo $ligne ['Planches'];?>">
          <input  class="btn" type="submit" name="ok" value="Facture">

  </form>
        <?php 
        }}
        ?>
</div> 
</div>  

</body>
</html>