Olá, espero que esteja tudo bem com você.
Eu vou explicar um pouco sobre o código, e sobre o que eu desenvolvi.
O site escolhido para o desafio foi o site da Tesla(https://www.tesla.com), um site bem bonito, e com uns efeitos bem legais com o scroll.
Confesso que ainda não está tudo pronto, tive uma pequena dificuldade para juntar o app react com a página PHP, acredito que com mais 1 dia de desenvolvimento eu conseguiria resolver o problema e também adicionar imagens sem direitos autorais na tela inicial, provavelmente eu fária mais algumas alterações, tive algumas ideias para um administrador poder fazer alterações na conta, e que o usuário também consiga alterar dados da próptia conta. 
Minha ideia inicial era desenvolver a tela inicial, a tela de login, e obviamente, a de cadastro, fiz algumas pequenas alterações, deixando apenas o necessário, como exemplo, no cadastro reduzi as informações pedidas para o email, nome e senha, bem simples, porém suficiente para o login.

----------------------------------------COMO ACESSAR----------------------------------------
<br>A parte do login foi feita em PHP, eu fiz a hospedagem dele, e é possível conferir por este link: https://danieltesla.000webhostapp.com/
Também é possível conferir usando um servidor local com um apache, basta baixar a pasta "tesla-php-html", depois use um servidor com apache(tipo o xampp), coloque a pasta "tesla-php-html" dentro da pasta "htdocs", inicie o apache, no navegador, coloque o endereço "localhost/tesla-php-html".

A página inical foi desenvolvida com React JS, e eu não hospedei o react da home, porém, para acessa-lo é bem simples, basta ter o node instalado, caso já instalado, é só baixar a pasta "tesla-react", abrir a pasta no terminal, depois execute o comando "yarn start", após é só esperar carregar que vai abrir o navegador com a página inicial.

--------------------------------------Explicando o Código------------------------------------
<br>Nas telas de cadastro e login, eu só fiz um formulário, com os campos de texto para o usuário digitar, que envia para um tratamento. No tratamento do cadastro, eu faço uma conexão com o banco de dados, pegos os dados enviados no formulário e passo para variáveis, faço uma transição com o banco para ter mais cotrole dos dados, em seguida faço uma querry inserindo os dados da váriavel no banco, depois eu coloquei uma condicional, onde se o banco realizar o cadastro, eu envio a tela de login, caso ocorra algum erro, ele reverte a transação, impedindo a inserção, e retornando para a tela de Cadastro. 
No tratamento do login, eu verifico se algo foi digitado, e em seguida começo a conexão com o banco, em seguida faço um select, para comparar os dados digitados com os dados cadastrados no banco, caso aconteça algum erro, ele retorna para a página de login, caso esteja tudo correto, ele salva o nome do usuário em uma sessão, e manda a tela final, onde tem um agradecimento por ter testado a aplicação.

No React, foi mais simples, eu só gerei uma tela grande com todas as cores já definidas, depois inseri todos os models ao mesmo tempo na tela, em seguida foi só definir a posição de cada um na tela, e fazer o efeito de opacidade dos modelos. No final foi só adicionar o Footer e Header, o header com a logo e o botão que deveriaa levar ao php de login e o footer com os direitos autoráis.

Este foi o projeto, teve algumas outras ideias também, como ultilizar uma API_Rest com crud em node(tem exemplo nos meus repositórios aqui no GitHub), invés de ultilizar um banco gratuíto da internet, mas acredito que devido ao tempo, o mysql foi a melhor opção, tenho que dizer que foi divertido fazer este projeto, foi quase como ter que fazer meu tcc em 5 dias. Mas foi uma experiência legal.

See You Space Cowboy...
