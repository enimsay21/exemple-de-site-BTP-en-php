
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
    height: 120vh;
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
    width: 500px;
    height:700px;
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
</style>

<body>
   <section> <button><a href="acceuil.php" >retour</a> </button></section>
<div class="cont">  
   <div class="forum">
<form  method="POST" action="demande.php"  enctype="multipart/form-data">
    <h1>DEMANDE DE FORMATION</h1>
        <label> Nom </label>
     <input type="text" name="nom">
       <label>Prenom </labe>
           <input type="text" name="prenom">
           <label>Email </label>
          <input type="text" name="email">
         
            <label>Ville </label>
           <input type="text" name="ville">
        
            <label>Pays </label>
          <input type="text" name="pays">
            <label>Message contient le nom de  Matreiel  </label>
           <textarea name="message" style="width:200; height:100;" required></textarea>
    
           <label>donner votre CV</label>
            <input type="file" name="myfile">
          <input  class="btn" type="submit" name="ok" value="Envoyer">

  </form>
</div> 
</div>
</body>
</html>
