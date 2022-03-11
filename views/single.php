<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Affichage animal</title>
</head>

<body>
    <h1>Afficher un animal</h1>
    <form id="onteste" action="../controllers/getSingle.php" method="POST">
    <label for="nom">Quel animal voulez-vous afficher ?</label>
    <input type="text" name="nom" placeholder="nom de l'animal" id="nom">
    </form>
</body>
</html>