<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="noticias.php">Noticias</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <?php if ('logado' == 'logado') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acessar Painel</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="#" href="#">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="#" href="#">Categorias</a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </nav>
</header>