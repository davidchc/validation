# Library for data validation

Sample library creation to validate data

The idea is to show a practical way to create a library for data validation.

An Abstract class called Validator is defined, which defines the methods that other classes with specific rules will need to implement.

Within the Rules folder, rules for validation are defined. Each rule is defined by means of a class that extends the Validator class.

The Validate class receives a value, and receives the rules that will validate this value.


# Biblioteca para validação de dados

Exemplo de criação de biblioteca para validar dados

A ideia é mostrar uma forma prática de como criar uma biblioteca para validação de dados.

É definido uma classe Abstrata chamada Validator, que defini os métodos que outras classes com regras especificas precisarão implementar.

Dentro da pasta Rules, é definido as regras para validação. Cada regra é definida por meio de uma classe que estende a classe Validator.

A classe Validate recebe um valor, e recebe as regras que irão validar esse valor.

#Example

```php
<?php 

require __DIR__.'/vendor/autoload.php';

use Validation\Validate;
use Validation\Rules\Required;
use Validation\Rules\Email;


$value = 'valor';
$validate = new Validate($value);
$validate->add(Required::class)
         ->add(Email::class);
    
if(!$validate->execute()) {
     echo $validate->getError();
} else {
     echo 'Passou';
}










