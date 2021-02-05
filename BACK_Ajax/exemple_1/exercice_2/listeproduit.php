<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produit</title>
</head>
<body>
<button id="btn1">Afficher nos produits</button>
<div id="jarditou"></div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>

    $(document).ready(function() {
        $("#btn1").click(function() {

            $("#jarditou").load("produits.php");
        });

       
    });

</script>

</body>
</html>