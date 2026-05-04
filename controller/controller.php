<?php
require_once("model/model.php");
require_once("views/header.php");
// die("after header");

 $page="alletudiant";
 if (isset($_GET["page"])) {
    $page=$_GET["page"];
 }
 if ($page=="alletudiant") {
    $etudiants=getAllEtudiant();
    require_once("views/alletudiant.php");
 }elseif ($page=="dev") {
    $etudiants=getEtudiantsByFiliere(filiere: "dev");
    require_once("views/dev.php");
 } 
 elseif ($page=="dn") {
    $etudiants=getEtudiantsByFiliere(filiere: "dn");
    require_once("views/dn.php");
 }
 elseif ($page=="ajout") {
    require_once("views/ajout.php");
 }else{
    echo "page introuvable";
 }
 require_once("views/footer.php");