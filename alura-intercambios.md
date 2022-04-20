# A Tertúlia

Agora a tertúlia terá um novo site **2.0** totalmente novo, com um design inovador com a última versão do [Wordpress]().

## Configurações

Para iniciar o projeto, acessa a pasta `docker` e execute o comando: 

```sh
docker-compose up -d
```

Após isso veja o site rodando através do link: `http://localhost:80`.

### Banco de dados

As configurações do banco de dados do Wordpress via docker são: 

**Nome do banco de dados**: wordpress
**Nome do usuário**: wordpress
**Senha**: wordpress
**Servidor do banco de dados**: mysql

### Acesso

As informações de acesso (login) do wordpress da Opipari são:

**Login**: opipari
**Senha**: 123456789

### Configurando o debug do wordpress

Dentro do [Visual Studio Code]() em `settings.json` acrescente a seguinte informação:

```json
"launch": {
  "version": "0.2.0",
  "configurations": [
    {
      "name": "XDebug (docker) opipari",
      "type": "php",
      "request": "launch",
      "port": 9000,
      "pathMappings": {
        "/var/www/html/": "${workspaceRoot}/dev",
      },
      "xdebugSettings": {
        "max_children": 999,
      }
    },
  ],
  "compounds": []
},
```

E pronto.

## Comandos úteis

Existem alguns comandos que vão facilitar a vida do desenvolvedor do site da **Tertúlia**, como alguns descritos a seguir.

### Fazer o download do Wordpress

Para baixar a última versão do Wordpress, inicie a aplicação e execute os comandos abaixo:

```sh
docker-compose exec wordpress bash

wp core download --locale=pt_BR
```

E a partir dai o wordpress sejá baixado com sucesso.