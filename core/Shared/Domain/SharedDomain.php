<?php

namespace Core\Shared\Domain;

abstract class SharedDomain
{
     public function __construct(private mixed $entity =null,private readonly ?string $exception =null)
     {
          $this->IsException($exception);
     }
     
     public function entity():mixed{
          return $this->entity;
     }
     protected abstract function IsException(?string $exception):never;
}