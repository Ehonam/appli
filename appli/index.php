<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" /> <!-- Bootstrap CSS, ensemble de class CSS pré fait (comme ça, même pas besoin de fichier CSS) -->
    <title>Ajout produit</title>
</head>
<body>
    <nav> <!--Permettre à l'utilisateur d'aller sur la page recap.php à tout moment, à l’aide d’une barre de navigation -->
        <ul>
            <li><a href="recap.php">Voir le récapitulatif</a></li>
        </ul>
    </nav>
    <p>Nombre total d'articles en session : <a href="recap.php?totalQuantité=<?php echo number_format($totalQuantité, 0, ",", "&nbsp;")."&nbsp;"; ?>"></p>
    
    <div class="table">
    <form action="traitement.php" method="post"> <!-- formulaire de renseignement produits -->
        <p>
            <label>
                Nom du produit :
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label>
                Prix du produit :
                <input type="number" step="any" name="price">
            </label>
        </p>
        <p>
            <label>
                Quantité désirée :
                <button onclick="decrementQuantity('quantity1')">-</button>
                <input type="number" name="qtt" value="1">
                <button onclick="incrementQuantity('quantity1')">+</button>
            </label>
        </p>
        <p>
            <input type="submit" name="submit" value="Ajouter le produit">
        </p>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->
    
    <!--- <?php
    $quantities = array(1); // Tableau des quantités

    echo "<table>";
    foreach ($quantities as $qtt) {
        echo "<tr>";
        echo "<td><a href='?qtt=" . ($qtt + 1) . "'>+</a></td>";
        echo "<td>" . $qtt . "</td>";
        echo "<td><a href='?qtty=" . ($qtt - 1) . "'>-</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    if (isset($_GET['quantity'])) {
        $qtt = $_GET['qtt'];
        // Vérifier si la quantité est valide et mettre à jour le tableau des quantités
    }
    ?>
    --->
    <!--- <script>
    function incrementQuantity(quantityId) {
        var quantityElement = document.getElementById(quantityId);
        var currentQuantity = parseInt(quantityElement.textContent);
        quantityElement.textContent = currentQuantity + 1;
    }

    function decrementQuantity(quantityId) {
        var quantityElement = document.getElementById(quantityId);
        var currentQuantity = parseInt(quantityElement.textContent);
        if (currentQuantity > 0) {
        quantityElement.textContent = currentQuantity - 1;
        }
    }
    </script> --->



</div>
</body>

</html>
