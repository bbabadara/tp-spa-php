<?php
require_once(ROOT."/model/convertisseur.php");


function getAllEtudiant():array{
    return jsonToArray("etudiants")  ;
}
function getEtudiantsByFiliere(string $filiere):array{
    $etudiants=getAllEtudiant();
 return array_filter($etudiants,fn($etudiant)=>strtolower($etudiant['filiere'])==strtolower($filiere));
}
function getEtudiantsByNiveau(string $niveau):array{
    $etudiants=getAllEtudiant();
 return array_filter($etudiants,fn($etudiant)=>$etudiant['niveau']==$niveau);
}

function getEtudiantsByFilter(callable $filter):array{
       $etudiants=getAllEtudiant();
    return array_filter($etudiants,$filter);
}
// $f=fn($etudiant)=>$etudiant['niveau']=="L1";
// print_r(getEtudiantsByFilter($f));