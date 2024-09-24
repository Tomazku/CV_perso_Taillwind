<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi, I'm Thomas</title>
    <!-- Importation de Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Importation de la police Gelasio -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Votre fichier CSS personnalisé (si nécessaire) -->
    <link rel="stylesheet" href="styles.css">
</head>
<body class="text-slate-50 bg-black text-white font-gelasio">
    <header class="flex items-center justify-between w-[90%] h-[120px] mx-auto">
        <div class="flex items-center">
            <img class="h-10 w-auto py-3" src="./assets/kreartion-icon-only.webp" alt="Logo">
            <a href="mailto:thomas@kreartion.com" class="ml-4 text-sm hover:text-red-500">thomas@kreartion.com</a>
        </div>
        <nav>
            <ul class="flex space-x-8">
                <li><a href="#" class="hover:text-red-500">Experiences</a></li>
                <li><a href="#" class="hover:text-red-500">About me</a></li>
                <li><a href="#" class="hover:text-red-500">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="relative w-full max-w-md mx-auto mt-10">
    <!-- Image du cadre de l'iPhone -->
    <img src="./assets/frame-2482179_1280.png" alt="Cadre iPhone" class="w-full h-auto">
    <!-- Conteneur de l'iframe -->
    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center overflow-hidden">
      <!-- Iframe de votre site -->
      <iframe src="https://www.arcadia.kreartion.com/index.php" class="w-[78%] h-[85%]" frameborder="0"></iframe>
    </div>
  </div>
  
        
    <!-- Votre fichier JavaScript -->
    <script src="script.js"></script>
</body>
</html>
