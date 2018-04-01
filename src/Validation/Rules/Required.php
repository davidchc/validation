<?php 

namespace Validation\Rules;

use Validation\Validator;

class Required extends Validator
{
    
  public function valid()
  {
     return !empty($this->value);
  }
  public function getError()
  {
    return 'Campo Obrigatorio';
  }
}