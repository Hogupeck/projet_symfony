<?php

use App\Kernel;

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <a href="index.php">Accueil</a>
        <a href="Categorie.php">Categorie</a>
        <a href="Nouvelle_recette.php">Nouvelle recette</a>
        <input type="text" placeholder="Search...">
        <!-- <a href="acceuil.html">deconexion</a> -->
        deconexion
    </header>
    <main>
        <div class="max-w-2x1 mx-auto px-4 py-8 lg:max-w-7x1 grid grid-cols-1 gap-y-10 gap-x-8 sm:grid-cols-2 lg:grid-cols-3 xl-grid-cols-4">
            <div class="bg-white shadow-lg rounded-lg">
                <img src="https://t3.ftcdn.net/jpg/02/60/12/88/360_F_260128861_Q2ttKHoVw2VrmvItxyCVBnEyM1852MoJ.jpg" alt="food" class=" rounded-t-lg">
            </div>
        </div>
    </main>
</body>

</html>