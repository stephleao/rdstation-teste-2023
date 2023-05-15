<?php

/**
 * FOOTER
 */

$social_list = array(
  array(
    'name' => 'Twitter',
    'icon' => '',
    'url' => 'https://twitter.com/rd_station',
  ),
  array(
    'name' => 'Facebook',
    'icon' => 'i-facebook-alt',
    'url' => 'https://www.facebook.com/ResultadosDigitais/',
  ),
  array(
    'name' => 'LinkedIn',
    'icon' => 'i-linkedin-alt',
    'url' => 'https://www.linkedin.com/company/resultadosdigitais',
  ),
  array(
    'name' => 'Instagram',
    'icon' => '',
    'url' => 'https://www.instagram.com/resdigitais/',
  ),
  array(
    'name' => 'Youtube',
    'icon' => '',
    'url' => 'https://www.youtube.com/channel/UC5lPKvmw6-DFya_qreisENQ',
  ),
);

?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col">
        <a class="brand" href="/" rel="home">
          <ion-icon class="brand" src="/images/rdstation-logo.svg" aria-hidden="true"></ion-icon>
          <span class="visually-hidden">RD Station</span>
        </a>
      </div>
      <div class="col">
        <ul class="social-menu">
          <?php foreach ($social_list as $social) :
            $ionicon_attr = $social['icon'] ? 'src="/images/logo-icons/' . $social['icon'] . '.svg"' : 'name="logo-' . $social['name'] . '"';
          ?>
            <li class="">
              <a target="_blank" rel="noopener" href="<?= $social['url']; ?>" class="">
                <ion-icon <?= $ionicon_attr; ?> aria-hidden="true"></ion-icon>
                <span class="visually-hidden"><?= $social['name']; ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col">
        <p>© 2021 RD Station. <a href="https://legal.rdstation.com/pt/privacy-policy/">Política de Privacidade</a>.</p>
      </div>
    </div>
  </div>
</footer>