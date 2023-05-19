import Collapse from 'bootstrap/js/dist/collapse';

export default class Helpers {

  /**
   * Menu mobile
   */

  static activeMobileMenu(mainNavbar) {
    // Botao de menu ativo
    let toggler = document.querySelectorAll('.navbar-toggler, .btn-menu');
    let collapse = document.querySelector('.navbar-collapse');

    toggler.forEach(function (item) {
      item.addEventListener('click', function () {
        this.classList.toggle('active');

        let status = this.classList.contains('active') ? 'true' : 'false';
        this.setAttribute('aria-expanded', status);
      });
    });

    mainNavbar.querySelectorAll('a:not(.dropdown-toggle)').forEach(function (item) {
      item.addEventListener('click', function () {
        new Collapse(collapse, {
          hide: true
        });
      });
    });

    collapse.addEventListener('hidden.bs.collapse', function () {
      toggler.forEach(function (item) {
        item.classList.remove('active');
      });
    });
  }

  /**
   * Coloca foco no campo de texto ao clicar em um radio
   * e marca o radio ao clicar no campo
   */

  static formSetChecked(inputRadio, inputText) {
    inputRadio.addEventListener('click', function () {
      inputText.focus();
    });
    inputText.addEventListener('click', function () {
      inputRadio.checked = true;
    });
  }

  /**
   * Funcao que retorna o template de mensagem do form
   */
  static appendFormMessage(wrapper, messageAttrs) {
    wrapper.innerHTML = `<div class="form-message-wrapper" role="alert"><div class="icon-wrapper icon-size-3 text-${messageAttrs.color}"><ion-icon name="${messageAttrs.icon}" aria-hidden="true"></ion-icon></div><h3 class="h3">${messageAttrs.title}</h3><p>${messageAttrs.text}</p></div>`;
  }

}