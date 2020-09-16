<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<title>Basic fit API</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="icon" href="https://pbs.twimg.com/profile_images/1244325575659061249/YjvhVutG_400x400.jpg" type="image/gif" sizes="16x16">
<body>
    <form onclick="myname()">
        <input type="file" name="" id="file-input" class="class1" /><br />
        <div class="class2">Download</div>
        <input type="submit" value="Envoyer" id="submit-button" class="class3" onclick="disip()" />
    </form>
    <div id="encours">Telechargement en cours </div>
 
    <div id="upload-progress"></div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="upload.js"></script>
    <a href="uploads/" class="class4">
        <div>Mes fichiers</div>
    </a>
 <link rel="stylesheet" href="css.css">

    <?php
    if (isset($_SESSION["nom"])) {
        // affiche le lien du fichier link
    ?>
        <a href="link_data.php" class="link_data">Lien pour la data </a>
    <?php
    }
    ?>
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
</body>
</html>

