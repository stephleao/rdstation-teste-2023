<?php

/**
 * Template-part: Section Hero
 */
?>

<section class="section-hero section-wrapper bg-light">
  <div class="container">
    <div class="row justify-content-between">
      <header class="column-text col-12 col-md-6 pt-md-4 mt-xl-5">
        <h1 class="pb-md-3">Gere mais <span class="text-primary">oportunidades</span> para seu negócio</h1>
        <p class="lead">O RD Station Marketing é um software para sua empresa fazer campanhas melhores, nutrir Leads, gerar oportunidades comerciais qualificadas e alcançar mais resultados.</p>
      </header>

      <div class="column-form col-12 col-md-5">
        <div class="card">
          <div class="card-body">
            <div class="text-center mb-4 pb-4 border-bottom border-light border-2">
              <h2 class="h4 mb-3">Comece seus 10 dias de teste grátis do RD Station Marketing!</h2>
              <p class="text-muted mb-0">Não precisa cadastrar cartão de crédito. 😉</p>
            </div>

            <form id="lead-form" class="lead-form">
              <form id="lead-form" class="lead-form">
                <div class="form-group mb-3">
                  <label class="form-label" for="lead-nome">Diga, qual seu nome?</label>
                  <input type="text" class="form-control" id="lead-nome" name="lead-nome" placeholder="Insira seu nome" maxlength="48" required>
                </div>
                <div class="form-group mb-3">
                  <label class="form-label" for="lead-email">Seu email de trabalho</label>
                  <input type="email" class="form-control" id="lead-email" name="lead-email" placeholder="Insira seu email" maxlengh="48" required>
                </div>
                <div class="form-group mb-3">
                  <label class="form-label" for="lead-tel">Seu telefone</label>
                  <input type="tel" class="form-control" id="lead-tel" name="lead-tel" placeholder="Insira seu número de telefone com DDD" minlength="14" maxlength="15" pattern="/^\([1-9]{2}\) (?:[2-5]|9\d)\d{3}-\d{4}$/" required>
                </div>
                <div class="form-group mb-3">
                  <label class="form-label" for="lead-cargo">Seu cargo de ocupação</label>
                  <select class="form-select" required>
                    <option value="" selected disabled>Selecione seu cargo</option>
                    <option value="Sócio(a) / CEO / Proprietário(a)">Sócio(a) / CEO / Proprietário(a)</option>
                    <option value="Diretor(a) de Vendas">Diretor(a) de Vendas</option>
                    <option value="Diretor(a) de Marketing">Diretor(a) de Marketing</option>
                    <option value="Diretor(a) Outras Áreas">Diretor(a) Outras Áreas</option>
                    <option value="Gerente de Marketing">Gerente de Marketing</option>
                    <option value="Gerente de Vendas">Gerente de Vendas</option>
                    <option value="Coordenador(a)/Supervisor(a) de Marketing">Coordenador(a)/Supervisor(a) de Marketing</option>
                    <option value="Coordenador(a)/Supervisor(a) de Vendas">Coordenador(a)/Supervisor(a) de Vendas</option>
                    <option value="Analista/Assistente de Marketing">Analista/Assistente de Marketing</option>
                    <option value="Analista/Assistente de Vendas">Analista/Assistente de Vendas</option>
                    <option value="Vendedor(a) / Executivo(a) de Contas">Vendedor(a) / Executivo(a) de Contas</option>
                    <option value="Estudante">Estudante</option>
                    <option value="Outros cargos">Outros cargos</option>
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label class="form-label" for="lead-senha">Crie uma senha</label>
                  <input type="password" class="form-control" id="lead-senha" name="lead-senha" minlength="6" maxlength="10" pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,10}$/" required autocomplete="off">
                </div>
                <div class="form-group mb-3">
                  <label class="form-label" for="lead-confirma-senha">Confirme sua senha</label>
                  <input type="password" class="form-control" id="lead-confirma-senha" name="lead-confirma-senha" maxlength="10" data-pristine-equals="#lead-senha" required autocomplete="off">
                </div>
                <div class="form-group mb-3">
                  <div class="form-label mb-3">Qual o site da sua empresa?</div>
                  <?php
                  // Entendo o proposito de ter um radio para justamente testar a pessoa que esta desenvolvendo.
                  // Mas se fosse algo real, seria muito mais simples este campo nao ser obrigatorio, em vez de
                  // obrigar o usuario preencher um campo sem um valor de fato. Quanto menos campos o usuario
                  // tiver que preencher, mais ele tende a terminar e submeter o form.
                  ?>
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="lead-site-opcoes" id="lead-opcao-tenho-site" required>
                    <label class="form-check-label" for="lead-opcao-tenho-site">
                      Meu site é
                    </label>
                  </div>
                  <input type="url" class="form-control mb-3" id="lead-site" name="lead-site" placeholder="Insira o endereço do site" minlengh="5" maxlengh="48">
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="lead-site-opcoes" id="lead-opcao-sem-site" required>
                    <label class="form-check-label" for="lead-opcao-sem-site">
                      Ainda não tenho um site
                    </label>
                  </div>
                </div>
                <ul class="text-muted small ps-3 mb-4">
                  <li>Ao criar minha conta, estou de acordo com os <a href="https://legal.rdstation.com/pt-BR/rdstation-services-agreement/" target="_blank" rel="noopener">termos de uso</a> do software e <a href="https://legal.rdstation.com/pt/privacy-policy/" target="_blank" rel="noopener">política de privacidade</a>.</li>
                  <li>Ao preencher o formulário, concordo em receber comunicações de acordo com meus interesses.</li>
                  <li>* Você pode alterar suas permissões de comunicação a qualquer tempo.</li>
                </ul>
                <button type="submit" class="btn btn-highlight btn-lg w-100">Criar minha conta</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="column-back section-wrapper bg-primary-dark mt-5 mt-md-0">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <h2 class="h3">Estaremos juntos desde o primeiro passo!</h2>
          <p>Se você ainda não sabe como extrair o máximo das ações digitais, não tem problema. O <strong>RD Station Marketing</strong> é mais que uma ferramenta, nos importamos com os seus resultados.</p>
          <p><strong>Estaremos com você do planejamento até a prática!</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>