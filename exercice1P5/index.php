<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice1P5</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 1 partie 5</h1>
                <p class="lead text-center">Créer un tableau months et l'initialiser avec les valeurs suivantes :</p>
                <ol>
                    <li>Janvier</li>
                    <li>Février</li>
                    <li>Mars</li>
                    <li>Avril</li>
                    <li>Mai</li>
                    <li>Juin</li>
                    <li>Juillet</li>
                    <li>Aout</li>
                    <li>Septembre</li>
                    <li>Octobre</li>
                    <li>Novembre</li>
                    <li>Décembre</li>
                </ol>
            </div>
        </header>
        <main>
            <p class="php text-center">
                <?php
                //Déclaration du tableau avec les mois
                $mois = ['Janvier', 'Fevrier',  'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
                //Début de la boucle de 0 a 12 pour les mois
                for ($numero = 0; $numero < 12; $numero++){
                    //Affichage des mois avec la boucle de 0 a 12
                    echo $mois[$numero];
                    ?>
                <br>
                <?php
                 }
                ?>
            </p>
        </main>
    </body>
</html>
