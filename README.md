APPLICATION WEB EN PHP

L'application doit permettre à un utilisateur de renseigner différents produits par le 
biais d'un formulaire, produits qui seront consultables sur une page récapitulative. 
L'enregistrement en session de chaque produit est nécessaire. 

Trois pages sont nécessaires à cela :

1. index.php
Présentera un formulaire permettant de renseigner : 
o Le nom du produit 
o Son prix unitaire
o La quantité désirée

Il s'agit de :
 s'occuper du design à l'aide d'un fichier css
 permettre à l'utilisateur d'aller sur la page recap.php ou index.php à tout moment, à l’aide 
d’une barre de navigation
 afficher le nombre de produits présents en session à tout moment, quelle que soit la page 
affichée (on parle ici de la quantité totale d’articles, non pas du nombre de produits 
distincts)

![appli1](https://github.com/Ehonam/appli/assets/164899950/a05ee4a1-1320-43b3-9756-07a0cd0d17bd)

2. traitement.php
Traitera la requête provenant de la page index.php (après soumission du 
formulaire), ajoutera le produit avec son nom, son prix, sa quantité et le total calculé 
(prix × quantité) en session.
 faire en sorte que le fichier traitement.php, lorsqu'il retourne au formulaire, créé un 
message (d'erreur ou de succès, selon le cas de figure) et permettre à index.php de l'afficher


3. recap.php
Affichera tous les produits en session (et en détail) et présentera le total général de 
tous les produits ajoutés.
 supprimer un produit en session (selon le choix de l'utilisateur)
 supprimer tous les produits en session en une seule fois
 modifier les quantités de chaque produit grâce à deux points "+" et "-" positionnés de 
part et d'autre du nombre dans la cellule
 ajouter des messages de notifications pour la suppression d’article

![appli2](https://github.com/Ehonam/appli/assets/164899950/0268f487-a055-4f07-bab5-b11de77f22bd)
