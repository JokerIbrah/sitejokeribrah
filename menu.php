<?php
// Tableau associatif pour définir les éléments du menu
$menuItems = [
    ' HISTOIRE' => 'page histoire.php',
    ' THEME UTISER' => 'page theme utilisé.php',
    "OU L'ECOUTER" => "page ou l'écouté.php",
    
];
?>

<nav class="menuItems">
    <ul>
        <?php foreach ($menuItems as $label => $url): ?>
            <li><a href="<?php echo htmlspecialchars($url); ?>"><?php echo htmlspecialchars($label); ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<style>
 .menuItems {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: smaller;
}

    /* Ajoutez vos styles CSS pour le menu ici */
    nav ul {
        list-style-type: none;
        padding: 0;
    }
    nav ul li {
        display: inline;
        margin-right: 200px;
    }
    nav ul li a {
        text-decoration: none;
        color: black;
        padding: 50px 50px;
        transition: background-color 0.3s ease;
    }
    nav ul li a:hover {
        background-color: blue;
        color: white;
        border-radius: 50px;
    }
</style>
