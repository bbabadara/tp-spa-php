<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-indigo-600 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-white text-xl font-bold">Gestion Étudiants</h1>
            <div class="space-x-4">
                <a href="<?=WEBROOT?>?controller=etudiant&page=alletudiant" class="text-white hover:text-gray-200">Etudiants</a>
                <a href="<?=WEBROOT?>?controller=classe&page=allclasse" class="text-white hover:text-gray-200">Classe</a>
                <a href="<?=WEBROOT?>?controller=etudiant&page=ajout" class="bg-white text-indigo-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100">
                    + Ajout etudiant
                </a>
                <a href="<?=WEBROOT?>?controller=classe&page=ajout" class="bg-white text-indigo-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100">
                    + Ajout classe
                </a>
            </div>
        </div>
    </nav>