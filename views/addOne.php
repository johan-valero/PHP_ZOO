<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,500;0,600;0,700;1,500;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/8e8d5e63b3.js"></script>
    <title>Ajouter un animal</title>
</head>
<body class="bodyAddOne">
    <?php
        include('../views/inc/header.php');
    ?>

    <div class="containerAddOne">
        <div class="addOneFormulaire">
            <h1>Ajouter un animal</h1>
            <form id="form_text" action="../controllers/createOne.php" method="POST">
                <label for="nom">Quel est le nom de l'animal ?</label>
                <input type="text" name="nom" placeholder="Nom de l'animal" id="nom" required>
                <label for="couleur">Quelle est la couleur de l'animal ?</label>
                <input type="text" name="couleur" placeholder="Couleur de l'animal" id="couleur" required>
                <label for="origines">Quelle est l'origine de l'animal ?</label>
                <input type="text" name="origines" placeholder="Origine de l'animal" id="origines" required>
                <label for="race">Quelle est la race de l'animal?</label>
                <br>
                    <select name="race" id="race" required>
                        <option value="">--Choisissez la race--</option>
                        <option value="1">Reptile</option>
                        <option value="2">Félin</option>
                        <option value="3">Oiseaux</option>
                        <option value="4">Primates</option>
                        <option value="5">Poissons</option>
                        <option value="3">Chiens</option>
                        <option value="3">Chats</option>
                    </select>
                    <label for="avatar">Ajouter une image:</label>
                    <input type="url" id="avatar" name="avatar" accept="image/png, image/jpeg" placeholder="URL de l'image" required>
                    <br>
        
                <button type="submit" value="Valider">Valider</button>
            </form>
        </div>
    </div>  
</body>
</html>