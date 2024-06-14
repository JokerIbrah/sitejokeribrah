<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="site d'un artiste rap français de Metz">
    <title>Joker IBRAH</title>
    <link rel="stylesheet" href="style.css"> <!-- Lien vers le fichier CSS -->
    
</head>
<body>
<?php include 'menu.php'; ?> <!-- Inclusion du menu -->
    <!-- On va mettre le logo animé de Joker IBRAH-->
    <img id="logo" src="logo jokeribrah.jpg" alt="Logo animé sautant de haut en bas de JokerIBRAH. Ce logo se compose de plusieurs parties. Sur un fond blanc, une tête de lion aux yeux rouge avec une croix inversé rouge sur le front et une marteaux-faucille en rouge est mis sur son nez. Des motif fesant référence au crâne mexicain  sont partout autour de la tête. Cette tête est dans un dans triangle jaune (pointe vers le haut) qui est dans un cercle noir. En dessous il y a écrit JokerIBRAH en rouge et noir puis Glory,Antisystem,Loyalty en noir ">

    <script src="script.js"></script>
<h4>Ou peut on l'écouter?</h4>
           <p> Sur les plateformes de streaming: </p>
                <ul>
                    <div class="linkstream">
                    <li><img src="logo deezer.jpeg" alt="logo deezer">
                     <a href="https://www.deezer.com/fr/artist/180073417?utm_campaign=clipboard-generic&utm_source=user_sharing&utm_medium=mobile&utm_content=artist-180073417&deferredFl=1">DEEZER</a>
                     <iframe src="https://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=album&id=180073417" width="400" height="250" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
 </li>
                    <li>
                    <img src="logo spotify.jpg" alt="logo spotify">
                    <a href="https://open.spotify.com/intl-fr/artist/17uEp1U99X0z16038VvmqF?utm_medium=share&utm_source=linktree">SPOTIFY</a>
                    <iframe src="https://open.spotify.com/embed/album/17uEp1U99X0z16038VvmqF" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

                </li>
                    <li>
                    <img src="logo bandcamp.jpeg" alt="logo Bandcamp">
                        <a href="https://jokeribrah.bandcamp.com/album/acab-all-clitoris-are-beautifull">BANDCAMP</a>
                        <iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=1737188960/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless><a href="https://jokeribrah.bandcamp.com/album/acab-all-clitoris-are-beautifull">ACAB (All Clitoris Are Beautifull) by Joker IBRAH</a></iframe>

                    </li>
                    <li>
                    <img src="logo youtube.png" alt="logo youtube">
                    <a href="https://www.youtube.com/channel/UCRion2_smYWR4dREoRZF94A">YOUTUBE</a>
                    <iframe width="560" height="315" src="https://www.youtube.com/watch?v=Qv2Gl6pgKLc" frameborder="0" allowfullscreen></iframe>
                        <h6>Laissez votre témoignage</h6>
    <form action="collecter les temoigneges.php" method="POST">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <div class="button">
        <input type="submit" value="Soumettre">
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include 'affiche temoignage.php'; ?>

                </li>
                    </div>
                </ul>
<p>

</p>
<footer>
    <p><a href="contact.php">Contact</a> </p>
</footer>
</body>
</html>