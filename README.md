# PHP-Unit
Fizeram parte desse projeto Ivan da Silva, Nathan Riffel e Gabriela Demossi

PHP unit Engenharia de Software
Objetivo
O objetivo foi aprender a usar o PHPUnit, uma ferramenta que testa se funções em PHP estão funcionando. A gente testou funções simples e também viu como elas se comportam quando colocamos valores errados.
Como o Projeto Está Organizado

A estrutura do projeto foi assim:
testes-aula/
├── src/
│   └── Funcoes.php         <- onde estão as funções
└── tests/
    └── FuncoesTest.php     <- onde estão os testes das funções

Funções Criadas (src/Funcoes.php)

isEven($n)= Verifica se um número é par.

factorial($n)= Calcula o fatorial de um número. Se o número for negativo, dá erro.

isPalindrome($str)= Vê se uma palavra ou frase é igual de frente pra trás e de trás pra frente (como "arara").

fahrenheitToCelsius($f)= Converte uma temperatura de Fahrenheit para Celsius.

calculateDiscount($price, $percent)= Aplica um desconto. Se o valor ou o desconto for negativo, dá erro.

Testes Feitos
isEven
Teste com 10 → retorna true (é par).
Teste com 7 → retorna false (é ímpar).

factorial
Teste com 5 → retorna 120.
Teste com 0 → retorna 1.
Teste com -3 → dá erro (não aceita número negativo).

isPalindrome
Teste com "Ame a ema" → retorna true.
Teste com "AULA" → retorna false.

fahrenheitToCelsius
Teste com 32 → retorna 0 graus Celsius.
Teste com 212 → retorna 100 graus Celsius.

calculateDiscount
Teste com 100 e 10% → retorna 90.
Teste com -50 → dá erro.
Teste com 100 e -20% → dá erro.

Como os Testes Foram Rodados
Foi usado o comando:

bash
Copiar
Editar
./vendor/bin/phpunit tests
Resultado dos Testes
Todos os testes passaram.

As funções funcionaram como esperado.

Quando colocamos valores errados, as funções deram erro.

Reflexão Final
Os testes ajudaram? Sim, garantiram que tudo funcionasse bem

Algum teste deu errado? Sim, mas apos a correção todos deram certo.

Por que testar é importante? Porque ajuda a garantir que o código continue funcionando, mesmo quando for mudado ou melhorado no futuro.

