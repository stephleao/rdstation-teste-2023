<?php

/**
 * Template-part: Section Results List
 */

$content_list = array(
  '<strong>Ferramentas intuitivas</strong> e com modelos prontos, vídeos explicativos e passo a passo guiado',
  '<strong>Implementação com especialistas</strong> focada em planejamento e prática (nos planos Marketing Pro e Enterprise)',
  '<strong>Time de especialistas em Sucesso do Cliente</strong> para apoiar na otimização da estratégia em cada fase da sua jornada (nos planos Marketing Pro e Enterprise)',
  '<strong>Suporte técnico</strong> em português, espanhol e inglês para tirar dúvidas, <strong>com 97% de satisfação</strong> entre nossos clientes',
  '<strong>Muito conteúdo educativo</strong>, eventos, cursos da <a href="https://rduniversity.com.br/" target="_blank" rel="noopener">RD University</a> e comunidades para você continuar evoluindo',
);
?>

<section class="section-results-list section-wrapper bg-light">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-lg-5 mb-4 mb-lg-0">
        <h1 class="h3">Resultados previsíveis e mais clientes para sua empresa</h1>
        <p class="lead mb-4 pb-lg-3">Torne sua atuação no Marketing Digital mais eficaz</p>

        <ul class="list-icon">
          <?php foreach ($content_list as $content) : ?>
            <li class="mb-3">
              <span class="i-li">
                <ion-icon class="text-primary" src="/images/icons/i-checkmark.svg" aria-hidden="true"></ion-icon>
              </span>
              <?= $content; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-12 col-lg-6 order-lg-first">
        <img class="img-fluid" src="/images/img-results.jpg" width="600" height="600" alt="Mulher escrevendo resultados no vidro">
      </div>
    </div>
  </div>
</section>