<?php

/**
 * Template-part: Section Hero
 */
?>

<section class="section-hero section-wrapper bg-light">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Gere mais <span class="text-primary">oportunidades</span> para seu negócio</h1>
        <p>O RD Station Marketing é um software para sua empresa fazer campanhas melhores, nutrir Leads, gerar oportunidades comerciais qualificadas e alcançar mais resultados.</p>
      </div>

      <div class="column-form col-12 col-md-5">
        <div class="card">
          <div class="card-body">
            <div class="text-center mb-4 pb-4 border-bottom border-light border-2">
              <h2 class="h4 mb-3">Comece seus 10 dias de teste grátis do RD Station Marketing!</h2>
              <p class="text-muted mb-0">Não precisa cadastrar cartão de crédito. 😉</p>
            </div>

            <form id="lead-form">
              <div class="">
                <label for="lead-nome">Diga, qual seu nome?</label>
                <input type="text" class="" id="lead-nome" name="lead-nome" placeholder="Insira seu nome" minlength="3" maxlength="48" required>
              </div>
              <div class="">
                <label for="lead-email">Seu email de trabalho</label>
                <input type="email" class="" id="lead-email" name="lead-email" placeholder="Insira seu email" minlengh="11" maxlengh="48" required>
              </div>
              <div class="">
                <label for="lead-tel">Seu telefone</label>
                <input type="tel" class="" id="lead-tel" name="lead-tel" placeholder="Insira seu número de telefone com DDD" pattern="^\([1-9]{2}\) (?:[2-5]|9\d)\d{3}-\d{4}$" minlength="14" maxlength="15" required>
              </div>
              <div class="">
                <label for="lead-cargo">Seu cargo de ocupação</label>
                <select class="" required>
                  <option selected>Selecione seu cargo</option>
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
              <div class="">
                <label for="lead-senha">Crie uma senha</label>
                <input type="password" class="" id="lead-senha" name="lead-senha" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,10}$" minlength="6" maxlength="10" required>
              </div>
              <div class="">
                <label for="lead-check-senha">Confirme sua senha</label>
                <input type="password" class="" id="lead-check-senha" name="lead-check-senha" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,10}$" minlength="6" maxlength="10" required>
              </div>
              <div class="">
                <div>Qual o site da sua empresa?</div>
                <?php
                // Entendo o proposito de ter um radio para justamente testar a pessoa que esta desenvolvendo.
                // Mas se fosse algo real, seria muito mais simples este campo nao ser obrigatorio, em vez de
                // obrigar o usuario preencher um campo sem um valor de fato. Quanto menos campos o usuario
                // tiver que preencher, mais ele tende a terminar e submeter o form.
                ?>
                <div class="form-check">
                  <input class="" type="radio" name="lead-site-opcoes" id="lead-opcao-tenho-site">
                  <label for="lead-opcao-tenho-site">
                    Meu site é
                  </label>
                </div>
                <input type="url" class="" id="lead-site" name="lead-site" placeholder="Insira o endereço do site" minlengh="5" maxlengh="48">
                <div class="form-check">
                  <input class="" type="radio" name="lead-site-opcoes" id="lead-opcao-sem-site">
                  <label for="lead-opcao-sem-site">
                    Ainda não tenho um site
                  </label>
                </div>
              </div>
              <ul>
                <li>Ao criar minha conta, estou de acordo com os <a href="https://legal.rdstation.com/pt-BR/rdstation-services-agreement/">termos de uso</a> do software e <a href="https://legal.rdstation.com/pt/privacy-policy/">política de privacidade</a>.</li>
                <li>Ao preencher o formulário, concordo em receber comunicações de acordo com meus interesses.</li>
                <li>* Você pode alterar suas permissões de comunicação a qualquer tempo.</li>
              </ul>
              <button type="submit" class="btn btn-primary">Criar minha conta</button>
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