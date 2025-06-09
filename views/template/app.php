<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weeb Book</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-stone-950 text-stone-400">
    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
            <div class="font-bold text-xl tracking-wide">WeeBBook</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/index.php" class="text-lime-300">Explorar</a></li>
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="#" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>


    <main class="mx-auto max-w-screen-lg">
        <?php require "views/{$view}.view.php"; ?>
    </main>
</body>

</html>