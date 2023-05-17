<?php

/**
 * HEADER
 */
?>

<header class="header-navbar navbar navbar-expand-lg">
  <nav class="container-lg">
    <a class="brand" href="/" rel="home">
      <ion-icon class="brand-rdstation text-primary" src="/images/rdstation-logo.svg" aria-hidden="true"></ion-icon>
      <span class="visually-hidden">RD Station</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu-wrapper" aria-controls="main-menu-wrapper" aria-expanded="false" aria-label="Abrir menu">
      <ion-icon name="menu" aria-hidden="true"></ion-icon>
    </button>

    <div id="main-menu-wrapper" class="collapse navbar-collapse justify-content-end">
      <div class="flex-fill" aria-hidden="true"></div>
      <ul class="main-nav navbar-nav flex-fill justify-content-evenly">
        <li class="nav-item">
          <a class="nav-link" href="#">Menu 1</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu mega-dropdown-menu">
            <div class="row g-0">
              <div class="col-12 col-lg-4">
                <div class="dropdown-header">Metodologia</div>
                <ul class="nav flex-column">
                  <li class="nav-item"><a class="nav-link" href="#">Tudo sobre Inbound Marketing</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-4">
                <div class="dropdown-header">Cursos</div>
                <ul class="nav flex-column">
                  <li class="nav-item"><a class="nav-link" href="#">RD University</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Introdução ao Inbound Marketing</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">RD Station Marketing Basic</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-4">
                <div class="dropdown-header">Ferramentas</div>
                <ul class="nav flex-column">
                  <li class="nav-item"><a class="nav-link" href="#">Avalie seu funil de vendas</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Compare suas métricas de Email Marketing</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Calcule o ROI do RD Station Marketing</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu 4</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Menu 5</a>
        </li>
      </ul>

      <div class="secondary-nav">
        <a class="btn btn-secondary me-3" href="#">Botão</a>
        <a class="btn btn-primary" href="#">Botão <ion-icon class="i-arrow-right" src="/images/icons/i-arrow-forward.svg" aria-hidden="true"></ion-icon></a>
      </div>
    </div>
  </nav>
</header>