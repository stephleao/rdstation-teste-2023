// Webpack Imports
// import BS components
import Collapse from 'bootstrap/js/dist/collapse';
import Dropdown from 'bootstrap/js/dist/dropdown';

import Helpers from './Helpers';

(function () {
  "use strict";

  let mainNavbar = document.querySelector('.header-navbar');

  // Botão de menu ativo
  Helpers.activeMobileMenu(mainNavbar);

})();