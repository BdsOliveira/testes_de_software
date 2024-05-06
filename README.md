## Introdução à Testes de Software com PHP e PHPUnit

Neste exemplo temos a utilização de dois tipos de testes. 

Foram implementados testes unitários, que garatem que as menores unidades de código do nosso projeto estão se comportando como esperado.

E também foram implementados testes de integração, que utilizam unidades de código (previamente testadas através dos nossos testes unitários) para garantir que estas pequenas unidades de código além de funcionarem isoladamente, também funcionam como esperado quando utlizadas em escopos mais complexos e com mais ações.

### Este projeto calcula a equação de 2º Grau utilizando a fórmula de Bháskara. As regras aplicadas no código foram implementadas seguindo o seguinte artigo: [Mundo Educação](https://mundoeducacao.uol.com.br/matematica/equacao-2-grau.htm)

## Para visualizar na online
[Não disponível ainda](google.com)

## Para executar o projeto na sua máquina

```bash
# Clone o projeto na sua máquina
git clone git@github.com/bdsoliveira/testes_de_software.git
```

```bash
# Entre no diretório recém criado 
cd testes_de_software
```

```bash
# Instale as dependencias necessárias
composer install
```

```bash
# Execute os testes
composer test
```

```bash
# Visualize a versão web no seu navegador
composer serve
```

Após executar o comando `composer serve` acesse seu navegador http://localhost:8080/ 

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)