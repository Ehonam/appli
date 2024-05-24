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
                <input type="number" name="qtt" value="1">
            </label>
        </p>
        <p>
            <input type="submit" name="submit" value="Ajouter le produit">
        </p>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->
    </div>
</body>
