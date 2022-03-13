<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,500;0,600;0,700;1,500;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/8e8d5e63b3.js"></script>
    <title>Supprimer un animal</title>
</head>
<body class="bodyDeleteOne">
    <?php
        include('../views/inc/header.php')
    ?>
    <div class="containerDeleteOne">
        <div class="deleteOneFormulaire">
            <h1>Supprimer un animal </h1>
            <form id="form_text" action="../controllers/deleteOne.php" method="POST">
                <label for="cheese">Quel est le nom de l'animal ?</label>
                <input type="text" name="name" placeholder="Nom de l'animal" id="name">
                <button type="submit" value="Valider">Valider</button>
            </form>
        </div>
    </div>

</body>
</html>