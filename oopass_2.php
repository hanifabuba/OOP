Q1: What is abstraction:
    Abstraction in object-oriented programming is the one which handles complexity by hiding unnecessary details from the user which enables the user to
implement more complex logic on top of the provided abstraction without understanding or even thinking about all the hidden complexity.
  Object in an OOP language provide an abstraction that hides the internal implementation details. For example, a coffee machine in our kitchen,
you just need to know which methods of the object are available to call and which input parameters are needed to trigger a specific operation. 
But you don’t need to understand how this method is implemented and which kinds of actions it has to perform to create the expected result.
Abstraction is of two types namely:
1: Data Abstraction.
2: Process Abstraction.

 Example1:
<?php
abstract class shape{
    abstract public function area();
     public function display(){
        echo "This is a shape";
     }
}
class circle extends shape{
    private $radius;
    public function __construct($radius){
        $this->radius=$radius;
    
    }
    public function area(){
        return 3.142 * pow($this->radius, 2);
    }
}
class Rectangle extends shape{
    private $width;
    private $height;
    public function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
    }
    public function area(){
        return $this->width * $this->height;
    }
}
$cir = new circle(5);
echo $cir->area();
echo "<br>";
$cir->display();
echo "<br>";
$rectan = new Rectangle(2,5);
echo $rectan->area();
echo "<br>";
$rectan->display();

?>


QUESTION2:
<?php
//Define a namespace called MyApp.
//namespace MyApp;
//Define a class called user within the MyApp namespace
class user{
    public function sayHello(){
        echo "Hello from user";
    }
}
//define a namespace called otherApp.
//namespace otherApp;
//define a class called MyApp within the otherApp namespace.
    class MyApp{
       public function sayHello(){
        echo "Hello from MyApp";
       }
    }
    //create an instance of MyApp and User;
$user1 = new MyApp();
$user1->sayHello();
echo "<br>";
$user2 = new user();
$user2->sayHello();
?>

QUESTION3:
<?php
//for function overloading
class vehicle{
    function move(){
        echo "The vehicle is moving";
    }
}
class car extends vehicle{
    function move(){
        echo "The car is moving on wheels";
    }
}
class boat extends vehicle{
    function move(){
        echo "The boat is moving on water";
    }
}
$vehicle = new vehicle();
$vehicle->move();
echo "<br>";
$car = new car();
$car->move();
echo "<br>";
$boat = new boat();
$boat->move();
?>

QUESTION4:
Q4:Limitations of OOP
I.Increased Complexity: OOP can lead to complex code structures, making it harder to understand and maintain.
II.Over-abstraction: Over using abstraction can make code difficult to comprehend and debug.
III.Tight coupling: OOP’s emphasis on encapsulation can lead to tightly coupled code, making it hard to modify or reuse.
IV.Over-reliance on inheritance: Inheritance can create rigid hierarchies, making it difficult to adapt to changing requiremets.
V.Limited scalability: OOP’s focus on individual objects can make it challenging to handle large-scale, distributed systems.
VI.Difficulty with concurrency: OOP’s emphasis on state and mutable data can make it hard to write concurrent programs.
VII.Limited support for functional programming: OOP’s focus on state and mutable data can make it challenging to implement functional programming concepts.
VIII.Over-emphasis on nouns:OOP’s focus on object and nouns can lead to neglect of verbs and action, making it hard to model complex processes.
IX.Difficulty with cross-cutting concerns:OOP’s focus on individual objects can make it challenging to address cross-cutting concerns like security,logging and caching.
