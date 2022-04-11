<?php

/* Exercice 1 */
    // Créer une variable avec le chiffre 12 
    $number = 12;
    
    // Lui ajouter 9 via l'opérateur arithmétique correspondant
    $number += 9;

    // Afficher la variable avec l'opération effectuée
    echo $number . "<br>";
    
/* Exercice 2 */
    // Prenons l'exemple d'une somme d'argent de 450 euros, composées en billets de 5, 10, et 20 euros
    $totalArgent = 450;
    define("BANKNOTE_5", 5);
    define("BANKNOTE_10", 10);
    define("BANKNOTE_20", 20);

    // Nous savons que nous possédons 6 billets de 20 euros et 52 billets de 5 euros, combien restent-ils de billets de 10 euros ?

    $argent10 = $totalArgent - (6 * BANKNOTE_20 + 52 * BANKNOTE_5);

    echo $argent10 . "<br>";  
    $argent10 /= BANKNOTE_10;
    echo $argent10 . "<br>";  

    // Poser les opérations nécessaires au calcul ci-dessous


/* Exercice 3*/
    // La rentrée des classes approchent et les élèves de 6e sont au nombre de 155, il faut tous les placer dans des classes de 30 maximum
    $student6 = 155;

    // Combien de classes aurons nous au final ? Développer ci-dessous
    $classe = $student6 / 30;
    echo $classe . "<br>";

    // Combien restera t'il d'enfants dans la dernière classe à être composée ? Développer ci-dessous

    $lastStudent = $student6 % 30;
    echo $lastStudent . "<br>";