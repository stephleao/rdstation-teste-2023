# Desafio Tech RD Station

Esta é a realização do desafio tech da RD Station para a [vaga de Engenheira de Software Front-end](https://boards.greenhouse.io/rdstation/jobs/6684614002), na equipe da Anna Luisa.


## ⚙️ Como Rodar

O que você precisa ter instalado: Docker, Node e Git.

1. Faça o clone do repositório.
2. Precisa rodar o Docker construindo a image. No terminal, execute:

    `docker-compose -f "docker-compose.yml" up -d --build`

3. Depois, você precisa instalar as dependências e compilar os arquivos de CSS e JS:
    - Instale as dependências do Node: `npm install`
    - Compile os CSS e JS do tema: `npm run build`
4. Acesse o site no seu local para ver se tudo tá certo.

## Descrição do desafio

Implementar o layout [deste Figma](https://www.figma.com/file/heOszg42LP1K070IiLXiLV/Teste---Vaga?type=design&node-id=3-21&t=w3TJst8xPAs2ry9h-0), utilizando qualquer stack que sinta-se confortável (React, Angular e Vue). Pontos extras:
  - Utilizar Next.js
  - Não utilizar Bootstrap e Jquery
  - Micro interações e animações para os elementos

Demonstrar conhecimentos como:

- Responsividade entre os tamanhos mobile e desktop
- Fidelidade a proposta visual que está no Figma
- Organização dos arquivos de código
- Semântica do código HTML
- Utilização dos seletores CSS



<details>
  <summary>Requisitos técnicos</summary>
  
  
### Responsividade:
Sua página deve ser responsiva, ou seja, adaptar-se aos diversos tamanhos de tela. No Figma estão as representações das telas com largura de 360px (mobile) e 1440px (desktop).
Dica: Atente-se a largura máxima dos containers nestes tamanhos e comoeles se comportam em tamanhos maiores e menores.

### Formulário:
- Todos os campos são obrigatórios
- No campo de email o valor inserido deve ser válido
- O campo de telefone deve conter a máscara (99) 9999[9]-9999, com o dígito entre os colchetes sendo opcional, cobrindo assim números de telefones fixos e celulares nacionais com ou sem o primeiro dígito 9.
- O campo cargo será do tipo select, e conterá as seguintes opções:
  - "Sócio(a) / CEO / Proprietário(a)",
  - "Diretor(a) de Vendas",
  - "Diretor(a) de Marketing",
  - "Diretor(a) Outras Áreas",
  - "Gerente de Marketing",
  - "Gerente de Vendas",
  - "Coordenador(a)/Supervisor(a) de Marketing",
  - "Coordenador(a)/Supervisor(a) de Vendas",
  - "Analista/Assistente de Marketing",
  - "Analista/Assistente de Vendas",
  - "Vendedor(a) / Executivo(a) de Contas",
  - "Estudante",
  - "Outros Cargos"
- Os campos de senha e confirmação de senha devem conter:
  - Mínimo 6 caracteres
  - Máximo 10 caracteres
  - Uma letra maiúscula
  - Uma letra minúscula
  - Um número
  - Ser iguais
  - Ainda no campo de senha e confirmação de senha, deverá existir a opção de ver o que está sendo escrito clicando no ícone do “olho”. Por padrão, os valores nestes campos devem vir como ocultos.
- O campo de site de ser preenchido com um endereço de URL válido
- O formulário deve enviar os valores através do método POST para https://rdstation-signup-psel.herokuapp.com.
(Atenção: este endpoint sempre retornará o status code 200 para qualquer valor
enviado por POST)
- O formulário deve exibir um feedback "Obrigado!, entraremos em contato", dentro do elemento wrapper do form (remova os elementos internos como inputs e selects) para exibir a mensagem.

Link termos de uso: https://legal.rdstation.com/pt-BR/rdstation-services-agreement/
Link política de privacidade: https://legal.rdstation.com/pt/privacy-policy/

### Play do vídeo:
Ao clicar no play do vídeo, deve ser aberto um modal com o vídeo em autoplay: https://www.youtube.com/watch?v=lGCesaaLi4s

### Redes sociais:
Os links das redes sociais devem abrir em nova aba, e são eles:
- Twitter - https://twitter.com/rd_station
- Facebook - https://www.facebook.com/ResultadosDigitais/
- Linkedin - https://www.linkedin.com/company/resultadosdigitais
- Instagram - https://www.instagram.com/resdigitais/
- Youtube - https://www.youtube.com/channel/UC5lPKvmw6-DFya_qreisENQ

### Botões "Criar Conta Gratuita":
Os botões devem enviar para https://app.rdstation.com.br/signup em uma aba nova.
</details>