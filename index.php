<!DOCTYPE html>
<html lang="fr">
<head>
  <title>GY-Goal Store - Vente de Maillots et Équipements</title> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="background ">
<header>
    <div class="header">
        <a href="index.php" class="logo">GY-GOAL</a>
        <div class="header-right">
            <a  class="active" href="#contact">Profil</a>
            <a href="#maillots">Maillots</a>
            <a href="#equipements">Equipements</a>
            <a href="#footer">A propos</a>
        </div>
    </div>
</header>
  <br><br>
  <?php
// Connexion à la base de données
$serveur = "127.0.0.1";
$mot_de_passe = "root";
$base_de_donnees = "gy-goal";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $mot_de_passe);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}


$SQLreq = "SELECT * FROM maillots ";
$req = $connexion->prepare($SQLreq);
$req->execute( );
$maillots = $req->fetchAll();
//var_dump($maillots);

?>
<section id="maillots">
<h2><center>Maillots</h2>
<br><br><br><br><br><br>
</section>
<?php
foreach ($maillots as $Maillot) {
?>
<div class="alignement">
    <p><?php echo $Maillot['NomEquipe'] ;?></p>
    <img src="<?php echo $Maillot['images']?>">
    <p><?php echo $Maillot['Prix'] ;?></p>
    <p><?php echo $Maillot['NombreMaillots'] ;?></p>
    <button>ajouter au panier</button>
    <br><br><br><br><br><br>
</div>
<?php
}
?>
<?php 
$SQLreq2 = "SELECT * FROM equipement ";
$req2 = $connexion->prepare($SQLreq2);
$req2->execute( );
$equipement = $req2->fetchAll();
//var_dump($equipement);

?>
<section id="equipements">
<h2><center>Equipements</h2>
<br><br>
</section>
<div class="alignement">
<?php
foreach ($equipement as $Equipements) {
?>
<div class="alignement">
    <p><?php echo $Equipements['NomEquipement'] ;?></p>
    <img src="<?php echo $Equipements['images']?>">
    <p><?php echo $Equipements['Prix'] ;?></p>
    <p><?php echo $Equipements['Quantité'] ;?></p>
    <button>ajouter au panier</button>
    <br><br><br><br><br><br>
</div>
<?php
}
?>
  <br><br><br>
<section id="footer">
  <footer>
    <div>
      <ul>
        <li><a href="">Twitter</a></li>
        <li><a href="">FaceBook</a></li>
        <li><a href="">LinkedIn</a></li>
        <li><a href="">Email</a></li>
        <li><a href="">Github</a></li>
        <li>
        <p>👋</p>
        </li>
      </ul>
    </div>
  </footer>
</section>
</body>
</html>
