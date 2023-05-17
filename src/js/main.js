// Webpack Imports
// import BS components
import Collapse from 'bootstrap/js/dist/collapse';
import Dropdown from 'bootstrap/js/dist/dropdown';

// import Fancybox
import { Fancybox } from '@fancyapps/ui';
import fbxLangBR from './fancybox-br';

import Helpers from './Helpers';

(function () {
  "use strict";

  //Fancybox3 traducao
  Fancybox.defaults.l10n = fbxLangBR;

  Fancybox.bind("[data-fancybox]");

  let mainNavbar = document.querySelector('.header-navbar');

  // Botão de menu ativo
  Helpers.activeMobileMenu(mainNavbar);

})();