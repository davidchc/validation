<?php 

namespace Validation;

abstract class Validator 
{
  protected $value;
  protected $error;
  
  public function __construct($value)
  {
    $this->value = $value;
  }
  
  abstract public function valid();
  abstract public function getError();
    
}