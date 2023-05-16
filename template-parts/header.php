<?php

/**
 * HEADER
 */
?>

<header class="header main-navbar">
  <nav class="container">
    <a class="brand" href="/" rel="home">
      <ion-icon class="brand" src="/images/rdstation-logo.svg" aria-hidden="true"></ion-icon>
      <span class="visually-hidden">RD Station</span>
    </a>

    <button class="navbar-toggle" type="button" aria-controls="main-menu-wrapper" aria-expanded="false" aria-label="Abrir menu">
      <ion-icon name="menu" aria-hidden="true"></ion-icon>
    </button>

    <div id="main-menu-wrapper" class="">
      <ul class="">
        <li class="item">
          <a href="#">Menu 1</a>
        </li>
        <li class="item dropdown">
          <button class="dropdown-toggle" type="button" aria-expanded="false">Menu 2</button>
          <div class="dropdown-menu">
            <div class="">
              <div class="dropdown-header">Metodologia</div>
              <ul>
                <li><a class="dropdown-item" href="#">Tudo sobre Inbound Marketing</a></li>
              </ul>
            </div>
            <div class="">
              <div class="dropdown-header">Cursos</div>
              <ul>
                <li><a class="dropdown-item" href="#">RD University</a></li>
                <li><a class="dropdown-item" href="#">Introdução ao Inbound Marketing</a></li>
                <li><a class="dropdown-item" href="#">RD Station Marketing Basic</a></li>
              </ul>
            </div>
            <div class="">
              <div class="dropdown-header">Ferramentas</div>
              <ul>
                <li><a class="dropdown-item" href="#">Avalie seu funil de vendas</a></li>
                <li><a class="dropdown-item" href="#">Compare suas métricas de Email Marketing</a></li>
                <li><a class="dropdown-item" href="#">Calcule o ROI do RD Station Marketing</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li class="item">
          <a href="#">Menu 3</a>
        </li>
        <li class="item">
          <a href="#">Menu 4</a>
        </li>
        <li class="item">
          <a href="#">Menu 5</a>
        </li>
      </ul>

      <div class="">
        <a class="btn btn-secondary" href="#">Botão</a>
        <a class="btn btn-primary" href="#">Botão <ion-icon class="i-arrow-right" src="/images/icons/i-arrow-forward.svg" aria-hidden="true"></ion-icon></a>
      </div>
    </div>
  </nav>
</header>