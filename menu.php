<?php
// Tableau associatif pour définir les éléments du menu
$menuItems = [
    'PAGE HISTOIRE' => 'page histoire.php',
    'PAGE THEME UTISE' => 'page theme utilisé.php',
    "OU L'ECOUTE" => "page ou l'écouté.php",
    
];
?>

<nav>
    <ul>
        <?php foreach ($menuItems as $label => $url): ?>
            <li><a href="<?php echo $url; ?>"><?php echo $label; ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<style>
    /* Ajoutez vos styles CSS pour le menu ici */
    nav ul {
        list-style-type: none;
        padding: 0;
    }
    nav ul li {
        display: inline;
        margin-right: 15px;
    }
    nav ul li a {
        text-decoration: none;
        color: black;
        padding: 10px 20px;
        transition: background-color 0.3s ease;
    }
    nav ul li a:hover {
        background-color: blue;
        color: white;
        border-radius: 5px;
    }
</style>
