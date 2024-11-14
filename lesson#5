<?php 
abstract class Main
{
    public int $mainNumber = 1;
    public int $powerNumber = 1;

    public function setMainNumber(int $mainNumber):void
    {
      $this->mainNumber = $mainNumber;
    }
    public function getMainNumber(): int
    {
      return $this->mainNumber;
    }


    public function setPowerNumber(int $powerNumber):void
    {
      $this->powerNumber = $powerNumber;
    }
    public function getPowerNumber(): int
    {
      return $this->powerNumber;
    }

    abstract public function calculate(): int;
}

class Power extends Main
{
    public function calculate(): int
    {
      return $this->mainNumber ** $this->powerNumber;
    }
}
$numbers = new Power();
$numbers->setMainNumber(2);
$numbers->setPowerNumber(3);
var_dump($numbers->getMainNumber());
var_dump($numbers->getPowerNumber());
var_dump($numbers->calculate());


///////////////////


class Multiply extends Main
{
  public int $multiplier = 1;


  public function setMultiplier(int $multiplier): void
  {
    $this->multiplier = $multiplier;
  }
  public function getMultiplier(): int
    {
      return $this->multiplier;
    }

  public function calculate(): int
  {
    return $this->mainNumber * $this->multiplier;
  }
}

$multiply = new Multiply();
$multiply->setMultiplier(3);
$multiply->setMainNumber(4);
var_dump($multiply->calculate());

class Addition extends Main 
{
  public int $adder = 1;

  public function setAdder(int $adder): void
  {
    $this->adder = $adder;
  }
  public function getAdder(): int
  {
    return $this->adder;
  }

  public function calculate(): int
  {
    return $this->mainNumber + $this->adder;
  }
}
$addation = new Addition();
$addation->setAdder(2);
$addation->setMainNumber(2);
var_dump($addation->calculate());


final class Division extends Main
{
  public int $divider = 1;

  public function setDivider(int $divider): void
  {
    $this->divider = $divider;
  }
  public function getDivider(): int
  {
    return $this->divider;
  }

  public function calculate(): int
  {
    return intdiv($this->mainNumber, $this->divider);
  }
}

$dicision = new Division();
$dicision->setMainNumber(10);
$dicision->setDivider(5);
var_dump($dicision->calculate());


class PowerAdd extends Power
{
    public int $addValue;

    public function setAddValue(int $addValue): void
    {
      $this->addValue = $addValue;
    }

    public function getAddValue(): int
    {
      return $this->addValue;
    }

    public function addAfterPower(): int
    {
      return $this->calculate() + $this->addValue;
    }

    public function addToMainNumber(): int
    {
      return $this->mainNumber + $this->addValue;
    }
}

$powerAdd = new PowerAdd();
$powerAdd->setMainNumber(2);
$powerAdd->setPowerNumber(3);
$powerAdd->setAddValue(5);
var_dump($powerAdd->addAfterPower());
class MultiplySubtract extends Multiply
{
    public int $subtract;

    public function setSubtractValue(int $subtract): void
    {
        $this->subtract = $subtract;
    }

    public function getSubtractValue(): int
    {
        return $this->subtract;
    }

    public function subtractAfterMultiply(): int
    {
        return $this->calculate() - $this->subtract;
    }

    public function subtractFromMainNumber(): int
    {
        return $this->mainNumber - $this->subtract;
    }
}
$multiplyAdd = new MultiplySubtract();
$multiplyAdd->setMainNumber(4);
$multiplyAdd->setMultiplier(2);
$multiplyAdd->setSubtractValue(3);
var_dump($multiplyAdd->subtractAfterMultiply()) ;










  
?>
