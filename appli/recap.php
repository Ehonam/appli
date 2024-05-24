<?php
    session_start(); /* permet de faire fonctionner les sessions. il est donc nécessaire d'appeler la fonction session_start() en début de fichier afin de récupérer, comme dit plus haut, la session correspondante à l'utilisateur. */
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" /> <!-- Bootstrap CSS, ensemble de class CSS pré fait (comme ça, même pas besoin de fichier CSS) -->
    <title>Récapitulatif des produits</title>
</head>
<body>
    <nav> <!--Permettre à l'utilisateur d'aller sur la page index.php à tout moment, à l’aide d’une barre de navigation -->
        <ul>
            <li><a href="index.php">Ajouter un produit</a></li>
        </ul>
    </nav>

    <?php
    if(!isset($_SESSION['products']) || empty($_SESSION['products'])) {
        echo "<p>Aucun produit en session...</p>";
    } else {
        echo "<table class='table table-striped table-hover'>",
                "<thead class='table-dark'>",
                    "<tr>",
                        "<th>#</th>",
                        "<th>Nom</th>",
                        "<th>Prix</th>",
                        "<th>Quantité</th>",
                        "<th>Total</th>",
                    "</tr>",
                "</thead>",
                "<tbody>";
    $totalGeneral = 0; /* initialisation des variables $totalGeneral a 0 */
    $totalQuantité = 0; /* initialisation des variables et $totalQuantité a 0 */
     
    foreach($_SESSION['products'] as $index => $product) {
        echo "<tr>",
                "<td>", $index + 1, "</td>",
                "<td>", $product['name'], "</td>",
                "<td>", number_format($product['price'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                "<td>", $product['qtt']."</td>",
                "<td>", number_format($product['total'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                "<td><a href='traitement.php?delete=$index'>Supprimer</a></td>",
             "</tr>";
        $totalGeneral+= $product['total']; /* $totalGeneral = $totalGeneral + $product['total'] */
        $totalQuantité+= $product['qtt']; /* $totalQuantité = $totalQuantité + $product['qtt'] */
    }
    echo    "<tr>",
            "<td colspan='4'>Total genéral : </td>",
            "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
            "</tr>",
            "</tbody>";
    
    echo    "<td><strong><a href='traitement.php?delete=all'>Tout supprimer</a></strong></td>";

                    

 
    
    } /* ne pas oublier l'accolade de fin */
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->
<p>Nombre de produits présents en session :  <?php echo number_format($totalQuantité, 0, ",", "&nbsp;")."&nbsp;"; ?></p> <!-- afficher le nombre de produit en session -->
</body>

</html>
