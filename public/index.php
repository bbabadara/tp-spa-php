<?php
define("WEBROOT","http://localhost:8002/");
define("ROOT", (substr($_SERVER['DOCUMENT_ROOT'] ,0, -6)));

// var_dump(jsonToArray("classes"));
// die;
require_once(ROOT."views/header.php");


$view=ROOT."views/classes";


 $controller="etudiant";
 if (isset($_REQUEST["controller"])) {
    $controller=$_REQUEST["controller"];
 }
 if ($controller=="etudiant") {
   require_once(ROOT."/controller/etudiantController.php");

 }
 elseif ($controller=="classe") {
    require_once(ROOT."/controller/classeController.php");

 }else{
    echo "controller introuvable";
 }


require_once(ROOT."views/footer.php");
