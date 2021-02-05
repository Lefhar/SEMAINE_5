<?php
// Connexion, avec par défaut les modes exception et objets 
$db = new PDO("mysql:host=localhost;dbname=jarditou", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ) );

$query = $db->prepare('SELECT pro_id, cat_nom , pro_libelle, pro_prix, pro_couleur, pro_photo, pro_ref, pro_stock, pro_d_ajout, pro_d_modif, pro_bloque  FROM produits join categories on cat_id = pro_cat_id ');
$query->execute();//execution
while ($row = $query->fetch(PDO::FETCH_ASSOC)) //notre boucle while pour afficher tout les produits
{
echo utf8_encode($row['pro_libelle']).'<br>';
}