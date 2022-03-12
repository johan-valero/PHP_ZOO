<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,500;0,600;0,700;1,500;1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/8e8d5e63b3.js"></script>
    <title>Animaux & co</title>
</head>

<body>
    <div class="container">
        <div class="left">
            <div class="header">
            <h1 class="animation a1">Animaux & Co</h1>
            <h2 class="animation a2">By Teddy, Adeline and Johan</h2>
        </div>
        <form>
            <button type="submit" formaction="./controllers/getAllAll.php" class="animation a1">Afficher la liste des animaux</button>
            <button class="animation a2" type="submit" formaction="./views/addOne.php">Ajouter un animal</button>
            <button class="animation a3" type="submit" formaction="./views/updateOne.php">Modifier un animal</button>
            <button class="animation a4" type="submit" formaction="./views/deleteOne.php">Supprimer un animal</button>
        </form>
        </div>
        <div class="right"></div>
    </div>

</body>
</html>