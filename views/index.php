        <h1 class="mt-6 mb-6 font-bold">Bem vindo ao Explorar da WeebBook</h1>
        <?php var_dump($view) ?>
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
                <div class="flex">
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