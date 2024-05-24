<?php
    session_start();

    if(isset($_POST['submit'])) { /* méthode POST employée pour ne pas polluer le formulaire vérifier l'intégrité des valeurs transmises dans le tableau $_POST*/
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS); /* filtre de validation qui remplace filter_sanitize_string */
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION); /* float validera le prix que s'il est un nombre à virgule (pas de texte ou autre…) */
        $qtt = filter_input(INPUT_POST, 'qtt', FILTER_VALIDATE_INT); /* ne validera la quantité que si celle-ci est un nombre entier différent de zéro */

        if($name && $price && $qtt) {

            $product = [
                'name' => $name,
                'price' => $price,
                'qtt' => $qtt,
                'total' => $price * $qtt
            ];

            $_SESSION['products'][] = $product; /* ajout ou enregistrement du produit dans le tableau $_SESSION['products']. Les deux crochets "[]"2 sont un raccourci pour indiquer à cet emplacement que nous ajoutons une nouvelle entrée au futur tableau "products" associé à cette clé. */
        }
    }

    header('Location: index.php'); /* redirige vers la page d'accueil La page qui l'emploie ne doit pas avoir émis un début de réponse avant header() (afficher du HTML, appeler les fonctions echo() ou print() ou un autre header()…) sous peine de perturber la réponse à émettre au client*/
    


?>
