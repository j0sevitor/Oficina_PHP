<div class="row mt-4">
    <div class="col-12">
        <a href="index.php" class="btn btn-dark">Voltar</a>
        <div class="card">
            <img class="card-img-top" src="<?= $item['image_link'] ?>" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"> <?= $item['titulo'] ?> </h4>
                <h5 class="card-text"> <?= $item['assunto'] ?>.</h5>
                <h6 class="card-subtitle mb-2 text-muted"> Categoria: <?= $item['nome'] ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"> Reporter: <?= $item['reporter'] ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"> Local: <?= $item['local'] ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"> Data: <?= date('d/m/Y', strtotime($item['criado_em'])) ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"> Hora: <?= date('H:i', strtotime($item['criado_em'])) ?></h6>
                <p> <?=$item['descricao'] ?></p>
                
                <!--<a href="#" class="btn btn-primary">Descubra</a>-->
            </div>
        </div>
    </div>
</div>

https://www.impacta.com.br/blog/wp-content/uploads/2020/04/267896-como-anda-o-mercado-de-games-no-brasil-descubra-neste-post.jpg