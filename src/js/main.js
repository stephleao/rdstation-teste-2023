// Webpack Imports
// import BS components
import Collapse from 'bootstrap/js/dist/collapse';
import Dropdown from 'bootstrap/js/dist/dropdown';

// import Fancybox
import { Fancybox } from '@fancyapps/ui';
import fbxLangBR from './fancybox-br';

// import Swiper
import Swiper, { Pagination, Grid } from 'swiper';

import Helpers from './Helpers';

(function () {
  "use strict";

  //Fancybox3 traducao
  Fancybox.defaults.l10n = fbxLangBR;

  Fancybox.bind("[data-fancybox]");

  let mainNavbar = document.querySelector('.header-navbar');

  // Botão de menu ativo
  Helpers.activeMobileMenu(mainNavbar);

  var swiper = new Swiper(".card-slider", {
    modules: [Pagination, Grid],
    slidesPerView: 1,
    spaceBetween: 24,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    watchOverflow: true,
    breakpoints: {
      768: {
        slidesPerView: 2,
        slidesPerGroup: 2,
      },
      992: {
        slidesPerView: 3,
        grid: {
          rows: 2,
          fill: "row",
        },
      }
    }
  });
})();