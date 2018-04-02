# Library for data validation

Sample library creation to validate data

The idea is to show a practical way to create a lib for data validation.

An Abstract class called Validator is defined, which defines the methods that other classes with rules will need to implement.

Within the Rules folder, you define the rules for validation, each rule defined a class that extends the Validator class.

That will manage and call the rules is the Validate class, which receives the value to be validator, and add rules that will validate this data.

# Biblioteca para validação de dados

Exemplo de criação de biblioteca para validar dados

A ideia é mostrar uma forma prática de como criar uma lib para validação de dados.

É definido uma classe Abstrata chamada Validator, que defini os métodos que outras classes com regras precisarão implementar.

Dentro da pasta Rules, é definido as regras para validação, cada regra definida uma classe que estende a classe Validator.

Que irá gerenciar e chamar as regras é a classe Validate, que recebe o valor a ser validador, e adicionar as regras que irão validar esse dado.



