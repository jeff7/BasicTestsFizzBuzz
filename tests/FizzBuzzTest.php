<?php

use PHPUnit\Framework\TestCase;
use TDD\FizzBuzz;

final class FizzBuzzTest extends TestCase {

  public function testInstance(): void
  {
    $faixa = [0,1,2,3];

    $fizzbuzz = new FizzBuzz($faixa);
    $this->assertInstanceOf('\TDD\FizzBuzz', $fizzbuzz);
  }

  public function testNumeros(): void
  {
    $faixa = [0,1,2,3];

    $fizzbuzz = new FizzBuzz($faixa);

    $expected = [0,1,2,3];
    
    $this->assertEquals($expected, $fizzbuzz->resultado);
  }

  public function testNumerosFizz(): void
  {
    $faixa = [0,1,2,3];

    $fizzbuzz = new FizzBuzz($faixa);

    $expected = [0,1,2,'fizz'];

    $fizz = $fizzbuzz->numerosFizz($faixa);
    
    $this->assertEquals($expected, $fizz);
  }
  
  public function testNumerosBuzz(): void
  {
    $faixa = [0,1,2,3,4,5];

    $fizzbuzz = new FizzBuzz($faixa);

    $expected = [0,1,2,3,4,'buzz'];

    $buzz = $fizzbuzz->numerosBuzz($faixa);
    
    $this->assertEquals($expected, $buzz);
  }

  public function testFizzBuzz(): void
  {
    $faixa = [0,1,2,3,4,5];

    $fizzbuzz = new FizzBuzz($faixa);

    $expected = [0,1,2,'fizz',4,'buzz'];

    $result = $fizzbuzz->fizzBuzz($faixa);
    
    $this->assertEquals($expected, $result);
  }

}