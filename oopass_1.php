<?php
//procedural programming
function greetprocedural($name){
    echo "Hello, $name";
}
greetprocedural("hanifa");
 echo "<br>";
//functional programming
function greetfunctional($name){
    return function() use ($name){
        echo "Hello, $name";
    };
}
$greet = greetfunctional("Ibrahim");
$greet();
 echo "<br>";
//object-oriented programming
class Greeter{
    private $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function greet(){
        echo "Hello, $this->name";
    }
}
$greeter = new Greeter("Arif");
$greeter->greet();




