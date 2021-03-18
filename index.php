<?php
/* 
    Créer la filmographie d'Indiana

    Dans un fichier PHP, crée un tableau contenant 3 titres de films dans lesquels joue notre ami Indiana.

    Pour chaque film, associe son année de sortie (le titre du film sera la clé).

    Une fois le tableau créé, réalise une boucle pour afficher la liste des films ainsi que leur année de sortie associée.

    Les films devront apparaître dans l'ordre croissant de sortie (regarde du côté des fonctions de tri).
    Pour chaque film, tu devras afficher:

    2000 - movie_title
    2000 étant l'année de parution du film. 
*/
    $titres=["Les Aventuriers de l'arche perdu","Indiana Jones et la Dernière Croisade","Indiana Jones 5"];

    $releaseYear[$titres[0]]=2022;
    $releaseYear[$titres[1]]=1989;
    $releaseYear[$titres[2]]=1981;
    
    asort($releaseYear);

    echo "<ul>";
    foreach ($titres as $key => $value)
    {
        echo "<li>$releaseYear[$value] - $value</li> ";
    }
    echo "</ul>";







