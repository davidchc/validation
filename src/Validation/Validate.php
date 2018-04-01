<?php 

namespace Validation;

class Validate
{
  private $rules = [];
  private $error;
  private $value;
  
  public function __construct($value)
  {
    $this->value = $value;
  }
       
  public function add($validate)
  {
     if(!class_exists($validate)) {
        throw new \Exception('Classe inexistente: '.$validate);    
     }

     $this->rules[] =  $validate; 
     
     return $this;
  }
  
  public function execute()
  {
  
      foreach($this->rules as $class) {
          $reflect  = new \ReflectionClass($class);
          
          $instance = $reflect->newInstanceArgs([$this->value]);
         
          if(!$instance->valid()) {
             $this->error = $instance->getError();
             return false;
          }
      }
    return true;
  }

  public function getError()
  {
    return  $this->error ;
  }

}