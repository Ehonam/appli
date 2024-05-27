<?php
    session_start(); /* permet de faire fonctionner les sessions. il est donc nécessaire d'appeler la fonction session_start() en début de fichier afin de récupérer la session correspondante à l'utilisateur. */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Site de vente de produit">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Récapitulatif des produits</title>
</head>
<body>

<ul class="navbar">
                <li><a href="index.php">Ajouter un produit</a></li>
</ul>

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
                        "<th></th>",
                        "<th>Quantité</th>",
                        "<th></th>",
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

                "<td><a class='btn btn-danger'href='traitement.php?action=down-qtt&id=$index'><i class='fa-solid fa-minus'></i></a></td>",
                "<td>".$product['qtt']."</td>",
                "<td><a class='btn btn-success' href='traitement.php?action=up-qtt&id=$index'><i class='fa-solid fa-plus'></i></a></td>",
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
        </main>
        
    </div>

    <p>Nombre de produits présents en session :  <?php echo number_format($totalQuantité, 0, ",", "&nbsp;")."&nbsp;"; ?></p> <!-- afficher le nombre de produit en session -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Bootstrap CSS, ensemble de class CSS pré fait (comme ça, même pas besoin de fichier CSS) -->
    
</body>
</html>
