<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice9P5</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 9 partie 5</h1>
                <p class="lead text-center">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <?php
                //Début du tableau
                $hauteFrance = array (
                        '80' => 'Somme',
                        '60' => 'Oise',
                        '02' => 'Aisne',
                        '59' => 'Nord',
                        '62' => 'Pas-de-Calais'
                        );
                //boucle Foreach
                    foreach($hauteFrance as $element)
                    {
               //affichage du tableau
                    echo $element;
                    ?>
                <br />
                <?php
                    }
                ?>
            </div>
        </main>
    </body>
</html>
