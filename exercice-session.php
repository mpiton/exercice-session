<?php 
session_start();
$maDate = [];

if (isset($_GET["page"])) {
   $page = $_GET["page"];
} else {
   $page = 1;
}

$debut = ($page - 1) * 10;
$fin = ($page - 1) * 10 + 9;

echo $debut . "<br>" . $fin . "<br>";

if (isset($_SESSION['date'])) {
   $maDate = $_SESSION['date'];
   
} else {
   echo "C'est votre première connexion !";
}

$maDate[] = date("d-m-Y H:i");
$_SESSION["date"] = $maDate;
$nbPage = intval(count($maDate) / 10) + 1;



for ($i= $debut; $i <= $fin ; $i++) { 
   echo $maDate[$i] . "<br>";
}

echo "C'est votre " . count($maDate) . " ème visite";

echo "<br>";

$i = 1;
while ($i <= $nbPage) {
   echo "<a href=?page=" . $i . ">Page ".$i."</a>";
   $i++;
}

?>