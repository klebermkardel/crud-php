# CRUD em PHP para cadastro de usuários

Este é um projeto simples em PHP que permite criar, ler, atualizar e deletar usuários em um banco de dados. O projeto utiliza código HTML com Bootstrap para o Front End e algumas ações em JavaScript para redirecionamento do usuário e ações ao clicar nos botões.

## Requisitos

- PHP 7.0 ou superior
- MySQL 5.6 ou superior
- Um servidor web (ex: Apache, Nginx)

## Instalação

1. Clone o repositório para o diretório raiz do servidor web:

 git clone https://github.com/seu-usuario/crud-php.git

2. Crie um banco de dados MySQL com as seguintes informações:

 Nome do banco de dados: cadastro
 Usuário: root
 Senha: (deixe em branco)

3. Importe o arquivo crud_php.sql para o banco de dados recém-criado:

 mysql -u root -p crud_php < crud_php.sql

Acesse o projeto através do seu navegador web, no endereço:

 http://localhost/crud-php

## Utilização

Ao acessar a página inicial do projeto, você será apresentado com uma lista de usuários cadastrados e uma barra de navegação com links para Página Inicial, Cadastro de Novos Usuários e Listagem de Usuários. A página inicial contém apenas uma página de boas-vindas, a página 'Novo Usuário' contém o formulário para cadastro de novos usuários e a página 'Listar Usuários' contém uma tabela com todos os usuários cadastrados e uma mensagem caso não haja nenhum usuário.

No formulário de cadastro, preencha os campos obrigatórios e clique em "Enviar" para cadastrar o usuário. Ao salvar o usuário, uma mensagem de alerta irá dizer que o usuário foi cadastrado com sucesso ou não evocê será redirecionado novamente para a lista de usuários.

Ao lado de cada usuário na lista, existem duas opções de ação: "Editar" e "Excluir". Ao clicar em "Editar", você será redirecionado para um formulário de edição, onde poderá alterar as informações do usuário. Ao clicar em "Excluir", o usuário será deletado do banco de dados após a sua confirmação.

## Linguagens e tecnologias.
<a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/javascript-colored.svg" width="36" height="36" alt="JavaScript" /></a>
<a href="https://developer.mozilla.org/en-US/docs/Glossary/HTML5" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/html5-colored.svg" width="36" height="36" alt="HTML5" /></a>
<a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/bootstrap-colored.svg" width="36" height="36" alt="Bootstrap" /></a>
<a href="https://www.php.net/manual/pt_BR/intro-whatis.php" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/php-colored.svg" width="36" height="36" alt="PHP" /></a>
<a href="[https://www.w3.org/TR/CSS/#css](https://www.devmedia.com.br/introducao-ao-mysql/27799)" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/danielcranney/readme-generator/main/public/icons/skills/mysql-colored.svg" width="36" height="36" alt="MySQL" /></a>
</p>

## Contribuição

Este projeto foi criado apenas para demonstração de habilidades e conhecimentos em PHP, e não leva em conta medidas de segurança ou outras preocupações importantes em projetos reais. No entanto, sinta-se à vontade para criar solicitações de pull ou relatar problemas no repositório do projeto.
