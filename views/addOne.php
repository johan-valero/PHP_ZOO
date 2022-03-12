<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Ajouter un animal</title>
</head>
<body>
    <form id="form_text" action="../controllers/createOne.php" method="POST">
    <label for="nom">Quel est le nom de l'animal ?</label>
    <input type="text" name="nom" placeholder="nom de l'animal" id="nom">
    <label for="couleur">Quelle est la couleur de l'animal ?</label>
    <input type="text" name="couleur" placeholder="couleur de l'animal" id="couleur">
    <label for="race">Quelle est la race de l'animal?</label>
    <br>
        <select name="race" id="race">
            <option value="">--Choisissez la race--</option>
            <option value="1">Reptile</option>
            <option value="2">Félin</option>
            <option value="3">Oiseaux</option>
            <option value="4">Primates</option>
            <option value="5">Poissons</option>
            <option value="3">Chiens</option>
            <option value="3">Chats</option>
        </select>
        <br>

    <input type="submit" value="Valider">
    </form>
</body>
</html>