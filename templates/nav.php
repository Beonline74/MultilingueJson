<?php
//Récupération de la langue à l'aide d'une variable GET
$language = isset($_GET['lang']) ? $_GET['lang'] : 'en';

// Charger les traductions depuis le fichier JSON correspondant
$translations = json_decode(file_get_contents("lang/$language.json"), true);
?>
<nav>
    <ul>
        <li><a href="index.php"><?php echo $translations['accueil']; ?></a></li>
        <li><a href="produit.php"><?php echo $translations['produit']; ?></a></li>
        <li><a href="contact.php"><?php echo $translations['contact']; ?></a></li>
        <li><a href="?lang=en">English</a></li>
        <li><a href="?lang=fr">Français</a></li>
    </ul>
</nav>
