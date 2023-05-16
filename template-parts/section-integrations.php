<?php

/**
 * Template-part: Section Integrations
 */

$tools_list = array(
  array(
    'logo' => 'i-rdstation',
    'name' => 'RD Station CRM',
  ),
  array(
    'logo' => 'i-salesforce',
    'name' => 'Salesforce',
  ),
  array(
    'logo' => 'i-google',
    'name' => 'Google',
  ),
  array(
    'logo' => 'i-facebook',
    'name' => 'Facebook',
  ),
  array(
    'logo' => 'i-linkedin',
    'name' => 'LinkedIn',
  ),
  array(
    'logo' => 'i-wordpress',
    'name' => 'Wordpress',
  ),
  array(
    'logo' => 'i-hotmart',
    'name' => 'Hotmart',
  ),
  array(
    'logo' => 'i-pagseguro',
    'name' => 'PagSeguro',
  ),
  array(
    'logo' => 'i-shopify',
    'name' => 'Shopify',
  ),
  array(
    'logo' => 'i-zapier',
    'name' => 'Zapier',
  ),
);
?>

<section class="section-integrations section-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 mb-4">
        <h1 class="h2">Torne sua operação de Marketing ainda mais poderosa</h1>
        <p class="lead">O RD Station Marketing se conecta as principais ferramentas nacionais e internacionais.</p>
      </div>

      <div class="col-12 col-lg-6">
        <ul class="list-unstyled row row-cols-2 row-cols-md-5 g-3 text-center">
          <?php foreach ($tools_list as $tool) : ?>
            <li class="col">
              <img class="" src="/images/logo-icons/<?= $tool['logo']; ?>.svg" width="40" height="40" alt="<?= $tool['name']; ?>">
              <p class="small text-black mt-2" aria-hidden="true"><?= $tool['name']; ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-12 text-center text-lg-start">
        <a class="btn btn-primary" href="https://app.rdstation.com.br/signup" target="_blank" rel="noopener">Criar conta gratuita</a>
      </div>
    </div>
  </div>
</section>