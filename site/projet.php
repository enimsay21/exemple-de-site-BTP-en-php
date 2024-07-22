<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 1px;
            background: white;
        }

        .content {
            display: flex;
            flex: 1;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding-top: 10px; 
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .projet {
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            height: 400px;
            margin: 20px;
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .projet:hover {
            transform: translateY(-5px);
        }

        .nom {
            font-size: 1.5rem;
            margin-bottom: 10px;
            font-family: 'Times New Roman', Times, serif;
            font-weight:bold;
            color: #333;
        }

        p {
            font-family: 'Times New Roman', Times, serif;
            font-size: 17px;
            white-space: normal;
            word-wrap: break-word;
            text-transform: uppercase;
        }

        img {
            width: 100%;
            height: 100%;
            max-height: 250px;
        }
    </style>
</head>
<body>
<?php include "css/heade.php";?>

    <div class="content">
        <div class="container">
            <?php
            $db = mysqli_connect('localhost', 'root', '', 'sitephp');
            $requet = mysqli_query($db, "SELECT * FROM projet");
            if (mysqli_num_rows($requet) > 0) {
                while ($row = mysqli_fetch_assoc($requet)) {
                    ?>
                    <div class="projet">
                        <h1 class="nom"><?php echo $row['nom']; ?></h1>
                        <img src="data:image/jpeg;base64,<?= base64_encode($row['image']); ?>" alt="image">
                        <p><?php echo $row['descrpition']; ?></p>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <?php include "css/footer.php";?>
</body>
</html>
