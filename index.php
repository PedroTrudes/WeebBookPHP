<?php
require('./dados.php')
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Book</title>
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
        <h1 class="mt-6 mb-6 font-bold">Bem vindo ao Explorar da WeebBook</h1>
        <form class="w-full flex space-x-2">
            <input type="text"
                class="border-stone-800 bg-stone-900 border-2 rounded-md text-sm focus:outline-none px-2 py-2"
                placeholder="Pesquisar..."
                name="pesquisar" />
            <button type="submit">Pesquisar</button>
        </form>

        <span>Lista de livros aqui:</span>
        <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">
        
        <?php foreach($livros as $livro): ?>
            <div class="bg-stone-800 p-2 rounded border-stone-800 bg-stone-900 border-2">
                <div class="bg-blue-800 flex">
                    <div class="w-1/3">image</div>
                    <div>
                        <a href="/livro.php?id=<?=$livro['id']?>" class="font-semibold hover:underline"><?=$livro['titulo']?></a>
                        <div class="text-xs italic"><?=$livro['autor']?></div>
                        <div class="text-xs italic">(3 Avaliação)</div>
                    </div>
                </div>
                <div class="mt-3">
                    <?=$livro['descricao']?>
                </div>
            </div>
        <?php endforeach; ?>

        </section>
    </main>
</body>

</html>