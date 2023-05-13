<?php

/**
 * Template-part: Section Demo
 */
?>

<section class="section-demo">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Entenda melhor como o RD Station Marketing funciona na prática</h1>

        <?php // Este botao deve acionar o modal para assistir ao video... ou...
        ?>
        <a class="btn btn-secondary" href="#" aria-hidden="true">Assista à demonstração <ion-icon name="play-circle"></ion-icon></a>
      </div>

      <div class="col">
        <?php
        // ...quando clica no play em cima do video?
        // (que, no caso, fiz toda a thumb ser clicavel porque aumenta a area de clique do usuario)
        // De qualquer forma, na realidade, nao seria bom pra acessibilidade ter links redundantes,
        // um atras do outro. Seria melhor ter apenas o link da thumb/play. Por isso, preferi esconder
        // o botao do leitor de tela.
        ?>
        <a class="thumb-cover" href="https://www.youtube.com/watch?v=lGCesaaLi4s" title="Clique para ver o vídeo">
          <img src="/images/img-video-thumbnail.jpg" alt="Prévia do vídeo">

          <div class="thumb-cover-caption" aria-hidden="true">
            <ion-icon class="i-play" name="play"></ion-icon>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>