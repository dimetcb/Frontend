<?php
class Person {
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;
  
  
  function __construct($name, $lastname, $age, $mother = null, $father = null) 
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->hp = 100;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
  }

  function sayHi($name) {
    return "Hi $name, I'm ". $this->name;
  }
  function setHp($hp) {
    if($this->hp + $hp >= 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;

  }
  function getHp() {
    return $this->hp;
  }
  function getName (){
    return $this->name;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather () {
    return $this-> father;
  }
   function getLastName() {
    return $this->lastname;
  }
  function getAge() {
    return $this->age;
  }
  function getInfo() {
    return "
    <h3>A few words about myself</h3><br>". "My name is: ".$this->getName()."<br> my lastname: ".$this->getLastName()."<br> my age: ".$this->getAge()."<br><br> my mother: ".$this->getMother()->getName()."<br> my mother lastname: ".$this->getMother()->getLastName()."<br> my mother age: ".$this->getMother()->getAge()."<br><br> My father: ".$this->getFather()->getName()."<br> my father lastname: ".$this->getFather()->getLastName()."<br> my father age: ".$this->getFather()->getAge()."<br><br> my mom grandmother: ".$this->getMother()->getMother()->getName()."<br> her lastname: ".$this->getMother()->getMother()->getLastName()."<br> my mother grandmother age: ".$this->getMother()->getMother()->getAge()."<br><br> my mom grandfather: ".$this->getMother()->getFather()->getName()."<br> my mom grandfather lastname: ".$this->getMother()->getFather()->getLastName()."<br> my mother grandfather age: ".$this->getMother()->getFather()->getAge()."<br><br> my father grandmother: ".$this->getFather()->getMother()->getName()."<br> my father grandmother lastname: ".$this->getFather()->getMother()->getLastName()."<br> my father grandmother age: ".$this->getFather()->getMother()->getAge()."<br><br> my father grandfather: ".$this->getFather()->getFather()->getName()."<br> my father grandfather lastname: ".$this->getFather()->getFather()->getLastName()."<br> my father grandfather age: ".$this->getFather()->getFather()->getAge();
  }
 
}


$igor = new Person("Igor", "Petrov", 68);
$irina = new Person("Irina", "Petrova", 67);
$nadezhda = new Person("Nadezhda", "Ivanova", 69);
$andrey = new Person("Andrey", "Ivanov", 70);

$alex = new Person("Alex", "Ivanov", 42, $nadezhda, $andrey);
$olga = new Person("Olga", "Ivanova", 42, $irina, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

// echo $valera->getName()."<br>";
// echo $valera->mother->getName(); //работает только при public
// echo $valera->getMother()->getName()."<br>";
// echo $valera->getMother()->getFather()->getName()."<br>";

echo $valera->getInfo();

// $igor = new Person("Igor", "Petrov", 38);
// echo $alex->sayHi($igor->name);
// $alex->name = "Alex";
// echo $alex->name;
// $medkit = 50;
// echo $alex->hp."<br>";
// $alex->hp = $alex->hp - 30;
// $alex->setHp(-30);
// echo $alex->getHp()."<br>";
// $alex->hp = $alex->hp + $medkit;
// $alex->setHp($medkit);
// echo $alex->getHp();

?>
