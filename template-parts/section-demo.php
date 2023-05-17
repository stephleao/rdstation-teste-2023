<?php

/**
 * Template-part: Section Demo
 */
?>

<section class="section-demo section-wrapper section-graphics-02-left">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-5 col-xl-4 mb-4 mb-md-0">
        <h1 class="h3 pb-md-4">Entenda melhor como o RD Station Marketing funciona na prática</h1>

        <?php // Este botao deve acionar o modal para assistir ao video... ou...
        ?>
        <a class="btn btn-secondary" href="#" aria-hidden="true">Assista à demonstração <ion-icon class="i-arrow" name="play-circle"></ion-icon></a>
      </div>

      <div class="col-12 col-md-7 col-lg-6 offset-lg-1">
        <?php
        // ...quando clica no play em cima do video?
        // (que, no caso, fiz toda a thumb ser clicavel porque aumenta a area de clique do usuario)
        // De qualquer forma, na realidade, nao seria bom pra acessibilidade ter links redundantes,
        // um atras do outro. Seria melhor ter apenas o link da thumb/play. Por isso, preferi esconder
        // o botao do leitor de tela.
        ?>
        <a class="thumb-cover" href="https://www.youtube.com/watch?v=lGCesaaLi4s" title="Clique para ver o vídeo">
          <img class="thumb-cover-img" src="/images/img-video-thumbnail.jpg" width="649" height="365" alt=" Prévia do vídeo">

          <div class="thumb-cover-caption" aria-hidden="true">
            <div class="icon-wrapper icon-size-3 icon-pulse">
              <div class="i-backdrop"></div>
              <ion-icon class="i-play" name="play"></ion-icon>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>