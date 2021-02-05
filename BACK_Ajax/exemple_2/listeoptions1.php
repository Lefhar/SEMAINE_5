<?php
// Connexion, avec par défaut les modes exception et objets 
$db = new PDO("mysql:host=localhost;dbname=ajax_regions", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'') );

$query = $db->prepare('SELECT * FROM regions ');
$query->execute();//execution
while ($row = $query->fetch(PDO::FETCH_ASSOC)) //notre boucle while pour afficher tout les produits
{
echo '<option value="'.$row['reg_id'].'">'.$row['reg_v_nom'].'</option>';
}