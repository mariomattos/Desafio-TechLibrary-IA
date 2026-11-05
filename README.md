# TechLibrary

Meu primeiro desafio técnico de programação feito pelo GEMINI PRO.

## Funcionalidades

- Cadastrar um Livro
- Listar Livros
- Atualizar Status
- Excluir um Livro
- Filtro Básico

## Pré-Requisitos

O que é necessário para rodar o projeto:
- Servidor PHP local
- MySQL 

## Desafio

A "TechLibrary", uma pequena biblioteca comunitária, controla seu acervo de livros atualmente em planilhas de Excel. Com o aumento do número de doações e empréstimos, eles estão perdendo o controle de quais livros estão disponíveis e quais foram emprestados.
Seu objetivo é desenvolver um Sistema de Gestão de Acervo (CRUD) web simples para que os bibliotecários possam gerenciar os livros.

### Estrutura do Banco de Dados

id (INT, Primary Key, Auto Increment)

titulo (VARCHAR 255, Not Null)

autor (VARCHAR 255, Not Null)

ano_publicacao (INT, Not Null)

status (ENUM ou VARCHAR, valores: 'disponivel', 'emprestado' - Default: 'disponivel')

data_cadastro (DATETIME ou TIMESTAMP, Default: Current Timestamp)

### Requisitos Técnicos 

Linguagem: PHP (Puro/Vanilla ou um micro-framework de sua escolha).

Banco de Dados: MySQL ou MariaDB.

Acesso a Dados: Utilizar PDO ou MySQLi (PDO é recomendado) com Prepared Statements para evitar SQL Injection.

Interface: HTML/CSS simples (pode usar Bootstrap, Tailwind ou apenas CSS puro). O foco é no backend, então a interface não precisa ser complexa, apenas funcional.

(Alternativa de Interface): Se preferir, você pode construir o sistema como uma API REST, retornando e recebendo dados em JSON (neste caso, a interface gráfica não é necessária).