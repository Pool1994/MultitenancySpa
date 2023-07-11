<?php
namespace Core\Shared\Domain\ValueObjects;


abstract class IntValueObject
{
     public function __construct(private int $value){

     }
     public function value():int{
          return $this->value;
     }
}