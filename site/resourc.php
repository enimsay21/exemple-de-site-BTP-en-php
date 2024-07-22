<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTP Excellence - À Propos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }


        .content {
            flex: 1;
            padding: 20px
        }

        .content h2 {
            text-align: center;
            margin-bottom: 1em;
        }

        .about {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }

        .about p {
            margin-bottom: 2em;
            font-size:15px;
        }

        .team-section {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 2em;
        }

        .team-member {
            flex: 1 1 calc(33% - 2em);
            box-sizing: border-box;
            margin: 1em;
            padding: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }

        .team-member img {
            max-width: 100%;
            border-radius: 50%;
        }

        .team-member h3 {
            margin: 0.5em 0;
        }

    </style>
</head>

<body>
<?php include "css/heade.php";?>


    <div class="content">
        <h2>Notre Histoire</h2>
        <div class="about">
            <p>Fondée en 2023, BTP  est une entreprise spécialisée dans le secteur du bâtiment et des travaux publics.</p>
            <p>Nous avons réalisé de nombreux projets d'envergure, allant de la construction de bâtiments résidentiels et commerciaux à la réalisation de travaux de voirie. Notre expertise et notre savoir-faire nous permettent de répondre aux besoins les plus exigeants de nos clients.</p>
            <p>Chez BTP , nous croyons en des valeurs fortes telles que l'intégrité, la transparence et le respect de l'environnement. Nous nous efforçons de créer des relations durables avec nos clients, nos partenaires et nos employés, basées sur la confiance et la collaboration.</p>
        </div>

        <h2>Notre Équipe</h2>
        <div class="team-section">
            <div class="team-member">
                <h3>MARWA</h3>
                <p>Directeur Général</p>
                <p>le diercteur de Entreprise</p>
            </div>
            <div class="team-member">
                <h3>SARA </h3>
                <p>INGÉNIEURS PROJET</p>
                <p>inrénieurs   des projets et veille à ce que chaque chantier soit réalisé dans les délais et le budget impartis.</p>
            </div>
            <div class="team-member">
                <h3>OMAR</h3>
                <p>Chef de Chantier</p>
                <p>OMAR supervise les équipes sur le terrain .</p>
            </div>
        </div>
    </div>
    <?php include "css/footer.php";?>
</body>
</html>