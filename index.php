<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo htmlspecialchars($_POST["nom"]);
}
$nom = "yvan";
if ($nom == trim($_POST["nom"])) {
    echo "Welcome";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="nom">Name</label>
        <input type="text" name="nom" id="nom"><br>
        <label for="prenom">Surname</label>
        <input type="text" name="prenom" id="prenom"><br>
        <label for="niveau">Level</label>
        <input type="number" name="niveau" id="niveau"><br>
        <input type="submit" value="Sign In">
    </form>
</body>

</html>