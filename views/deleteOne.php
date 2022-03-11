<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Supprimer un animal</title>
</head>
<body>
    <h1>Supprimer un animal </h1>
    <form id="onteste" action="../controllers/deleteOne.php" method="POST">
    <label for="cheese">Quel est le nom de l'animal ?</label>
    <input type="text" name="name" placeholder="nom de l'animal" id="name">
    <input type="submit" value="Valider">
    </form>
</body>
</html>