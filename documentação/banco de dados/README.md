# Banco de dados

## Modelo lógico

Publicação           |            ||
:--------------------|:-----------|:-
id                   |inteiro     |chave primária, auto-incremental
id do autor          |inteiro     |chave estrangeira, não vazio
título               |texto curto |não vazio
slug                 |texto curto |único, não vazio
imagem               |?           |
corpo                |texto longo |não vazio
estado de publicação |booleano    |não vazio, falso por padrão
data de criação      |data        |automático
data de atualização  |data        |automático

Usuário              |            ||
:--------------------|:-----------|:-
id                   |inteiro     |chave primária, auto-incremental
nome                 |texto curto |não vazio
nome de usuário      |texto curto |único, não vazio
email                |texto curto |
função               |?           |não vazio
senha                |texto curto |não vazio
data de criação      |data        |automático
data de atualização  |data        |automático

## Rascunho do modelo físico

```sql
create table publicacao ();
create table usuario ();
```