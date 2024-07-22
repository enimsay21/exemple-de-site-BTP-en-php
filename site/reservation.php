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
left:200px;
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
input ,textarea {
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
.conts {
    overflow: hidden;
    position: relative;
    width: 460px;
    height:300px;
    background: #fff;
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
    margin-top:1000px;
    right:270px;
  
}
.forums {
   
    position: relative;
    width: 450px;
    height: 100%;
    padding: 40px 30px;
}
</style>

<body>
<?php
    session_start();
    
    function calculerFacture($quantite, $prix_unitaire) {
        return $quantite * $prix_unitaire;
    }

    $prix_Briques = 6.5;
    $prix_Ciment = 80;
    $prix_acier  = 23;
    $prix_Parpaing = 8;
    $prix_Planches= 30;

    $quantite_Briques = 0;
    $quantite_Ciment = 0;
    $quantite_acier  = 0;
    $quantite_Parpaing = 0;
    $quantite_Planches = 0;
    $prix_total_facture = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantite_Briques = isset($_POST['brique']) ? $_POST['brique'] : 0;
        $quantite_Ciment = isset($_POST['ciment']) ? $_POST['ciment'] : 0;
        $quantite_acier = isset($_POST['acier']) ? $_POST['acier'] : 0;
        $quantite_Parpaing = isset($_POST['parpaing']) ? $_POST['parpaing'] : 0;
        $quantite_Planches = isset($_POST['planches']) ? $_POST['planches'] : 0;

        $prix_total_Briques = calculerFacture($quantite_Briques, $prix_Briques);
        $prix_total_Ciment = calculerFacture($quantite_Ciment, $prix_Ciment);
        $prix_total_acier = calculerFacture($quantite_acier, $prix_acier);
        $prix_total_Parpaing = calculerFacture($quantite_Parpaing, $prix_Parpaing);
        $prix_total_Planches = calculerFacture($quantite_Planches, $prix_Planches);

        $prix_total_facture = $prix_total_Briques + $prix_total_Ciment + $prix_total_acier + $prix_total_Parpaing + $prix_total_Planches;

        $_SESSION['quantite_Briques'] = $quantite_Briques;
        $_SESSION['quantite_Ciment'] = $quantite_Ciment;
        $_SESSION['quantite_acier'] = $quantite_acier;
        $_SESSION['quantite_Parpaing'] = $quantite_Parpaing;
        $_SESSION['quantite_Planches'] = $quantite_Planches;
        $_SESSION['prix_total_facture'] = $prix_total_facture;
    }
?>
<section> <button><a href="acceuil.php">retour</a> </button></section>
<div class="cont">  
    <div class="forum">
        <form method="POST" action="" enctype="multipart/form-data">
            <h1>Commander les Produits</h1>
            <label>Briques (6,5DH/unité)</label>
            <input type="number" name="brique" min="0" value="<?php echo htmlspecialchars($quantite_Briques); ?>">
            <label>Ciment (80 DH/25Kg)</label>
            <input type="number" name="ciment" min="0" value="<?php echo htmlspecialchars($quantite_Ciment); ?>">
            <label>Acier nervuré (23 DH/1Kg)</label>
            <input type="number" name="acier" min="0" value="<?php echo htmlspecialchars($quantite_acier); ?>">
            <label>Parpaing (8 DH/unité)</label>
            <input type="number" name="parpaing" min="0" value="<?php echo htmlspecialchars($quantite_Parpaing); ?>">
            <label>Planches (30 DH/unité)</label>
            <input type="number" name="planches" min="0" value="<?php echo htmlspecialchars($quantite_Planches); ?>">
            <input class="btn" type="submit" name="ok" value="Facture">
        </form>
    </div>
</div>

<div class="conts">  
    <div class="forums">
        <form method="POST" action="confirme.php">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<h3>La Facture</h3>";
                echo "<p>Briques: " . $prix_total_Briques . "DH</p>";
                echo "<p>Ciment: " . $prix_total_Ciment . "DH</p>";
                echo "<p>Acier nervuré: " . $prix_total_acier . "DH</p>";
                echo "<p>Parpaing: " . $prix_total_Parpaing . "DH</p>";
                echo "<p>Planches: " . $prix_total_Planches . "DH</p>";
                echo "<h3>Total: " . $prix_total_facture . "DH</h3>";
                echo "<input class='btn' type='submit' name='submit' value='Confirmer la commande'>";
            }
            ?>
        </form>
    </div> 
</div>
</body>
</html>