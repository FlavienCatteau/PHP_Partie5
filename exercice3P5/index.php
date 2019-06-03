<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice3P5</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 3 partie 5</h1>
                <p class="lead text-center">Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                //Déclaration du tableau avec les mois
                $mois = array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                //Affichage de la 3eme ligne, le chiffre 2 car un tableau commence a 0
                echo $mois[5];
                ?>
            </div>
        </main>
    </body>
</html>
