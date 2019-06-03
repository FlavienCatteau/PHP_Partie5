<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice4P5</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 4 partie 5</h1>
                <p class="lead text-center">Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.</p>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                //Déclaration du tableau avec les mois
                $mois = array ('Janvier', 'Fevrier',  'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
                //Mofication du mois d'aout en Août
                $mois[7] = 'Août';
                //Début de la boucle de 0 a 12 pour les mois
                for ($numero = 0; $numero < 1; $numero++){
                    //Affichage des mois avec la boucle de 0 a 12
                    echo $mois[$numero = 7];
                    ?>
                <br>
                <?php
                 }
                ?>
            </div>
        </main>
    </body>
</html>
