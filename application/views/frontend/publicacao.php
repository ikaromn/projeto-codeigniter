    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <!-- Third Blog Post -->
                <?php
                    foreach($postagens as $postagem){
                ?>
                <h1>
                    <?php echo $postagem->titulo ?>
                </h1>
                <p class="lead">
                    por <a href="<?php echo base_url('autor/'.$postagem->idautor.'/'. limpar($postagem->nome)) ?>"><?php echo $postagem->nome ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo postadoem($postagem->data) ?></p>
                <hr>
                <p><i><?php echo $postagem->subtitulo ?></i></p>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?php echo $postagem->conteudo ?></p>
                
                <hr>
                <?php
                    }
                ?>
            </div>