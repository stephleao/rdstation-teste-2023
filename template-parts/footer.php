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
    <div class="row g-0 justify-content-between align-items-center">
      <div class="col-12 col-sm-auto mb-3 mb-md-0">
        <a class="brand" href="/" rel="home">
          <ion-icon class="brand-rdstation text-white" src="/images/rdstation-logo.svg" aria-hidden="true"></ion-icon>
          <span class="visually-hidden">RD Station</span>
        </a>
      </div>
      <div class="col-12 col-sm-auto">
        <ul class="social-menu nav justify-content-center justify-content-md-end">
          <?php foreach ($social_list as $social) :
            $ionicon_attr = $social['icon'] ? 'src="/images/logo-icons/' . $social['icon'] . '.svg"' : 'name="logo-' . $social['name'] . '"';
          ?>
            <li class="nav-item">
              <a target="_blank" rel="noopener" href="<?= $social['url']; ?>" class="nav-link">
                <ion-icon <?= $ionicon_attr; ?> aria-hidden="true"></ion-icon>
                <span class="visually-hidden"><?= $social['name']; ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-12 copyright">
        <p>© 2021 <strong>RD Station</strong>. <a href="https://legal.rdstation.com/pt/privacy-policy/">Política de Privacidade</a>.</p>
      </div>
    </div>
  </div>
</footer>