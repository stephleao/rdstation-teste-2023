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

<section class="section-integrations">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Torne sua operação de Marketing ainda mais poderosa</h1>
        <p>O RD Station Marketing se conecta as principais ferramentas nacionais e internacionais.</p>
      </div>

      <div class="col">
        <ul class="row">
          <?php foreach ($tools_list as $tool) : ?>
            <li class="col">
              <img class="" src="/images/logo-icons/<?= $tool['logo']; ?>.svg" width="40" height="40" alt="<?= $tool['name']; ?>">
              <p aria-hidden="true"><?= $tool['name']; ?></p>
            </li>
          <?php endforeach; ?>
        </ul>

        <div class="col">
          <a class="btn btn-primary" href="#lead-form">Criar conta gratuita</a>
        </div>
      </div>
    </div>
  </div>
</section>