# OneMarket

Aplicação web para gestão de orçamentos, fichas de trabalho, clientes, produtos e administradores. O projeto foi desenvolvido em PHP e JavaScript no âmbito da Prova de Aptidão Profissional (PAP) do curso de Programador de Informática.

## Funcionalidades

- **Dashboard:** resumo de ganhos, progresso dos projetos, últimas ações e produtos fora de stock.
- **Fichas de trabalho:** criação, edição, eliminação, histórico, impressão e galeria de fotografias por secção.
- **Orçamentos:** criação, edição, eliminação, histórico e impressão de orçamentos detalhados.
- **Produtos:** gestão do stock, criação, edição e desativação de produtos.
- **Clientes:** criação, edição e desativação de clientes.
- **Administração:** gestão de administradores, permissões e consulta dos logs.
- **Perfil:** consulta e edição do perfil do administrador autenticado.

## Tecnologias

- PHP 7.4 ou superior
- MySQL
- HTML5 e CSS3
- JavaScript

## Requisitos

- PHP com as extensões `mysqli` e `gd` ativadas
- MySQL 5.7+ ou MariaDB equivalente
- Servidor web (Apache, Nginx ou o servidor de desenvolvimento do PHP)
- Base de dados `onemarket` com o respetivo esquema da aplicação

## Instalação

1. Clone ou copie o projeto para a pasta pública do servidor web.
2. Crie uma base de dados MySQL e importe o esquema da aplicação.
3. Copie `.env.example` para `.env` e preencha as credenciais:

   ```env
   DB_HOST=localhost
   DB_PORT=3306
   DB_NAME=onemarket
   DB_USER=root
   DB_PASSWORD=
   ```

   O ficheiro `.env` é local e não deve ser partilhado nem versionado.

4. Garanta permissões de escrita na pasta `images/uploads/`, utilizada para guardar imagens enviadas pela aplicação.
5. Inicie o servidor local a partir da raiz do projeto:

   ```bash
   php -S localhost:8000
   ```

6. Abra [http://localhost:8000](http://localhost:8000) e autentique-se com um administrador existente na base de dados.

## Configuração

A ligação ao MySQL é feita em `db/conexao.php` através das variáveis do `.env`. Se o ficheiro não existir, são usados os valores locais padrão (`localhost`, base de dados `onemarket`, utilizador `root` e password vazia).

## Estrutura principal

```text
.
├── db/                 # Ligação à base de dados e funções partilhadas
├── css/                # Folhas de estilo
├── images/             # Imagens da aplicação e uploads
├── *.php               # Páginas, formulários e endpoints JSON
├── .env.example        # Modelo de configuração local
└── README.md
```

## Segurança

- Nunca publique o `.env` nem credenciais reais.
- Use uma password forte para o utilizador MySQL em ambientes que não sejam locais.
- Faça cópias de segurança regulares da base de dados e da pasta `images/uploads/`.
