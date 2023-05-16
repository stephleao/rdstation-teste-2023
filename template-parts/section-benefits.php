<?php

/**
 * Template-part: Section benefits
 */

$content_list = array(
  array(
    'title' => 'Torne sua operação de Marketing Digital mais produtiva',
    'text' => 'Chega de usar várias ferramentas separadas e perder as informações no caminho! Somos o que chamam de ferramenta tudo-em-um: reunimos os principais recursos de Marketing Digital em um só lugar para sua operação ser mais eficaz.',
    'icon' => 'i-chart-line-up',
  ),
  array(
    'title' => 'Crie facilmente campanhas que funcionam',
    'text' => 'É fácil usar o RD Station Marketing, porque suas funcionalidades são simples, mas poderosas, e contam com dezenas de modelos — como de Landing Pages, Pop-ups, emails — para diversas ocasiões e segmentos que você pode personalizar de acordo com a sua campanha.',
    'icon' => 'i-bullhorn',
  ),
  array(
    'title' => 'Construa jornadas personalizadas e gere vendas em escala',
    'text' => 'Envie a mensagem certa na hora certa e construa jornadas personalizadas que geram até 5x mais conversões e guiam Leads até a compra. Automatize também suas tarefas e aumente a produtividade de Marketing e Vendas.',
    'icon' => 'i-chart-network',
  ),
  array(
    'title' => 'Encontre automaticamente as melhores oportunidades',
    'text' => 'Conheça melhor seu público, de acordo com as informações capturadas nas suas páginas e formulários. Defina critérios para identificar automaticamente Leads com maior potencial de compra e envie para o comercial oportunidades qualificadas.',
    'icon' => 'i-star',
  ),
  array(
    'title' => 'Saia da incerteza e comprove resultados',
    'text' => 'Ao invés de fazer uma série de ações isoladas, sem saber qual funciona, junte as informações de todos os seus contatos e suas ações em diferentes canais com recursos de análise para provar que Marketing Digital traz mais vendas e clientes.',
    'icon' => 'i-chart-pie',
  ),
  array(
    'title' => 'Suporte ágil e na sua língua',
    'text' => 'Nosso time de suporte técnico está disponível quando você precisar, com uma taxa de satisfação de 97% entre nossos clientes e um tempo médio de resolução de 6 horas. E o melhor: tudo isso em português.',
    'icon' => 'i-globe',
  ),
)
?>

<section class="section-benefits section-wrapper">
  <div class="row">
    <div class="col-12 col-md-6 mb-md-5">
      <h1 class="h2">A ferramenta de Automação de Marketing líder na América Latina</h1>
    </div>
    <div class="w-100"></div>

    <?php foreach ($content_list as $content) : ?>

      <div class="col-12 col-md-4 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="icon-wrapper text-primary">
              <ion-icon src="/images/icons/<?= $content['icon']; ?>.svg" aria-hidden="true"></ion-icon>
            </div>
            <h2 class="h3"><?= $content['title']; ?></h2>
            <p><?= $content['text']; ?></p>
          </div>
        </div>
      </div>

    <?php endforeach; ?>

  </div>
</section>