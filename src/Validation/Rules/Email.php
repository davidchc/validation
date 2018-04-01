<?php 

namespace Validation\Rules;

use Validation\Validator;

class Email extends Validator
{
    
  public function valid()
  {
     return filter_var($this->value, FILTER_VALIDATE_EMAIL);
  }
  public function getError()
  {
    return 'Digite um e-mail válido';
  }
}