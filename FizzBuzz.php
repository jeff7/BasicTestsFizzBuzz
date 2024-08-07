<?php

namespace TDD;

class FizzBuzz {
  public array $resultado = [];

  public function __construct($faixa) {
    $this->resultado = $faixa;
  }

  public function numerosFizz() {
    
    $resultado = [];

    foreach ($this->resultado as $num) {
      if ($num == 0)
          $resultado[] = $num;
      else {
        if ($num%3 == 0) {
          $resultado[] = 'fizz';
        } else {
          $resultado[] = $num;
        }
      } 
    }
    return $resultado;
  }
  
  public function numerosBuzz() {
    
    $resultado = [];

    foreach ($this->resultado as $num) {
      if ($num == 0)
          $resultado[] = $num;
      else {
        if ($num%5 == 0) {
          $resultado[] = 'buzz';
        } else {
          $resultado[] = $num;
        }
      } 
    }
    return $resultado;
  }

  public function fizzbuzz($faixa) {

    $resultado = [];

    foreach ($this->resultado as $num) {
      if ($num == 0)
          $resultado[] = $num;
      else {
        if ($num%3 == 0) {
          $resultado[] = 'fizz';
        } else {
          if ($num%5 == 0) {
            $resultado[] = 'buzz';
          } else {
            $resultado[] = $num;
          }
        }
      } 
    }
    return $resultado;
  }
}

