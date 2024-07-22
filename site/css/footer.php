<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
}
body{
    background-color: white;
}
    footer{
    background-color: rgba(219, 106, 57, 0.582);
    padding-top:50px ;

}
.containter{}
.row{
width: 1140px;
margin: auto;
display: flex;
justify-content: space-between;

}
h3{
color: rgba(228, 89, 29, 0.847);
font-size: 20px;
margin-bottom: 15px;
text-align: center;
font-family: 'Times New Roman', Times, serif;

}
.footer-content{
width: 33.3%;
}


.footer-content ul{
text-align: center;
font-size: 12px;
}
.list{
padding: 0;
}
.list li{
width: auto;
text-align: center;
list-style-type: none;
padding:7px;
position: relative;
color: white;
}
.list li::before{
content:'';
position:absolute;
transform: translate(-50%,-50%);
left: 50%;
top: 100%;
width: 0;
height: 2px;
background:  rgba(219, 106, 57, 0.582);
transition-duration: .5s;
}
.list li:hover::before{
width: 70px;
}
.footer-content a{
text-decoration: none;
color: rgb(249, 246, 243);

}
.social-icons{
text-align: center;
padding: 0;
}
.social-icons li{
text-align: center;
display: inline-block;
padding: 5px;
}
.social-icons i{
color: white;
font-size: 30px;
}
a{
text-decoration: none;
}

a:hover{
color: rgba(219, 106, 57, 0.582);

}
.social-icons i:hover{
color: rgba(219, 106, 57, 0.582);
}

.button-barre{
background:  rgba(219, 106, 57, 0.582);
text-align: center;
padding: 10px 0;
margin-top: 50px;
}
.button-barre p{
color: black;
margin: 0;
font-size: 16px;
padding: 7px;

}
    </style>
<body>
<footer>
        <div class="container">
            <div class="row">

    <div class="footer-content">
        <h3>Contact Inforamtion</h3>
        <ul class="list">
            <li>+123-456-7890</li>
            <li>+123-7889-123</li>
            <li>BatimentTravauxPublics@gmail.com</li>
            <li>El jadida 2400</li>
        </ul>
        
    </div>
<div class="footer-content">
            <h3>Liens rapides</h3>
            <ul class="list">
            <li><a href="acceuil.html">Accueil</a></li>
            <li><a href="projet.php">Projet</a></li>
            <li><a href="ressourc.php">Ressource</a></li>
            <li><a href="service.php">Service</a></li>
        </ul>
        </div>
        <div class="footer-content">
            <h3>Social media</h3>
            <ul class="social-icons">
          <li>  <a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
           <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
        <div class="button-barre">
            <p>&copy; Site Web 2024  Bâtiment et Travaux Publics</p>
        </div>
    </div>
    </footer>
</body>
<script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
</html>