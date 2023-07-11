<?php

namespace Core\Shared\Domain\ValueObjects;

class MixedValueObject
{
      public function __construct(private mixed $value){

     }
     public function value():mixed{
          return $this->value;
     }
}