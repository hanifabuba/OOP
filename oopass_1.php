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

?>




QUESTION 2:
Q2: Difference between Class, object and properties:
                                      CLASS
                                                                                                                                                               

                                      ANIMAL
   

	

             OBJECT                                          PROPERTIES


Cat             Dog          Fish                                Respiration      Movement     
                                                       Growth
 
A Class is a definition of the properties and methods of a particular object.
An Object is an individual instance of the data structure defined by a class.
A property is the data members declared inside the class.
A clear difference is shown in the diagram above which differentiate a class, object and properties





    
    QUESTION 3:
<?php
class fruit{
    public $name;
    public $color;
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        echo "The fruit name is "  . $this->name;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function getColor(){
        echo "The color is " .  $this->color;
    }
}
$fru1=new fruit();
$fru1->setName("Pawpaw");
echo $fru1->getName();
echo "<br>";
$fru1->setColor("Green");
echo $fru1->getColor();
echo "<br>";
$fru2=new fruit();
$fru2->setName("Orange");
echo $fru2->getName();
echo "<br>";
$fru2->setColor("Yellow");
echo $fru2->getColor();
echo "<br>";
$fru3=new fruit();
$fru3->setName("Strawberry");
echo $fru3->getName();
echo "<br>";
$fru3->setColor("Red");
echo $fru3->getColor();
echo "<br>";
$fru4=new fruit();
$fru4->setName("Banana");
echo $fru4->getName();
echo "<br>";
$fru4->setColor("Yellow");
echo $fru4->getColor();

?>



