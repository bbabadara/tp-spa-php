<?php
$etudiants=[
    ['matricule'=>'MAT0004','nom'=>'Diallo','prenom'=>'Moussa','email'=>'moussa.diallo@example.com','telephone'=>'7712345681',"niveau"=>'L2','filiere'=>'Dev'],
    ['matricule'=>'MAT0005','nom'=>'Bernard','prenom'=>'Lucas','email'=>'lucas.bernard@example.com','telephone'=>'7712345682',"niveau"=>'L2','filiere'=>'DN'],
    ['matricule'=>'MAT0006','nom'=>'Fall','prenom'=>'Aminata','email'=>'aminata.fall@example.com','telephone'=>'7712345683',"niveau"=>'L1','filiere'=>'dev'],
    ['matricule'=>'MAT0007','nom'=>'Moreau','prenom'=>'Sophie','email'=>'sophie.moreau@example.com','telephone'=>'7712345684',"niveau"=>'L1','filiere'=>'Dev'],
    ['matricule'=>'MAT0008','nom'=>'Sarr','prenom'=>'Ousmane','email'=>'ousmane.sarr@example.com','telephone'=>'7712345685',"niveau"=>'L2','filiere'=>'DN'],
    ['matricule'=>'MAT0010','nom'=>'Gueye','prenom'=>'Mamadou','email'=>'mamadou.gueye@example.com','telephone'=>'7712345687',"niveau"=>'L2','filiere'=>'Dev']
];

function getAllEtudiant():array{
    global $etudiants;
    return  $etudiants;
}
function getEtudiantsByFiliere(string $filiere):array{
    global $etudiants;
 return array_filter($etudiants,fn($etudiant)=>strtolower($etudiant['filiere'])==strtolower($filiere));
}
function getEtudiantsByNiveau(string $niveau):array{
    global $etudiants;
 return array_filter($etudiants,fn($etudiant)=>$etudiant['niveau']==$niveau);
}

function getEtudiantsByFilter(callable $filter):array{
        global $etudiants;
    return array_filter($etudiants,$filter);
}
// $f=fn($etudiant)=>$etudiant['niveau']=="L1";
// print_r(getEtudiantsByFilter($f));