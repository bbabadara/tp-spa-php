<?php
define("WEBROOT","http://localhost:8005/");
require_once("data.php");
require_once("header.php");
 $page="alletudiant";
 if (isset($_GET["page"])) {
    $page=$_GET["page"];
 }
 if ($page=="alletudiant") {
    $etudiants=getAllEtudiant();
    require_once("alletudiant.php");
 }elseif ($page=="dev") {
    $etudiants=getEtudiantsByFiliere(filiere: "dev");
    require_once("dev.php");
 } 
 elseif ($page=="dn") {
    $etudiants=getEtudiantsByFiliere(filiere: "dn");
    require_once("dn.php");
 }
 elseif ($page=="ajout") {
    require_once("ajout.php");
 }else{
    echo "page introuvable";
 }
 require_once("footer.php");

