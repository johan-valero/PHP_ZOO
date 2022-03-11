<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <title>Ajouter un animal</title>
</head>
<body>
    <form id="onteste" action="../controllers/createOne.php" method="POST">
    <label for="nom">Quel est le nom de l'animal ?</label>
    <input type="text" name="nom" placeholder="nom de l'animal" id="nom">
    <label for="couleur">Quelle est la couleur de l'animal ?</label>
    <input type="text" name="couleur" placeholder="couleur de l'animal" id="couleur">
    <label for="race">Quelle est la race de l'animal?</label>
    <br>
        <select name="race" id="race">
            <option value="">--Choisissez la race--</option>
            <option value="1">reptile</option>
            <option value="2">félin</option>
            <option value="3"></option>
        </select>
        <br>

    <input type="submit" value="Valider">
    </form>
</body>
</html>