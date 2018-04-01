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




