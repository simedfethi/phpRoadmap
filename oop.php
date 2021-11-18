<?php

class Person {
    public $name = '';
    function getName() {
        return $this->name;
    }
    function setName($newName) {
        $this->name = $newName;
    }
}
class HTMLStuff {
    static function startTable() {
        echo "<table border=\"1\">\n";
    }
    static function endTable() {
        echo "</table>\n";
    }
}

HTMLStuff::startTable();
// print HTML table rows and columns
HTMLStuff::endTable();

class Person2 {

  public  $name;
  private $lastname;
   final function getname(){
      return $this->name;
  }
}
$test= new Person2;
$test->getname();


class Childperson extends Person2 {

   // function getname(){}
}

class Person3 {
    public $age;
    public function __construct() {
        $this->age = 0;
    }
    public function incrementAge() {
        $this->age += 1;
        $this->ageChanged();
    }
    protected function decrementAge() {
        $this->age -= 1;
        $this->ageChanged();
    }
    private function ageChanged() {
        echo "Age changed to {$this->age}";
    }
}
class SupernaturalPerson extends Person3 {
    public function incrementAge() {
// ages in reverse
        $this->decrementAge();
    }
}
$person = new Person3;
$person->incrementAge();
//$person->decrementAge(); // not allowed
//$person->ageChanged(); // also not allowed
$person = new SupernaturalPerson;
$person->incrementAge(); // calls decrementAge under the hood

class Person4 {
    function takeJob(Job $job) {
        echo "Now employed as a {$job->title}\n";
    }
}

class Person6 {
    protected $rowId = 0;
    public $username = 'Anyone can see me';
    private $hidden = true;
}
 class Person7 extends Person6{
  //  $this->$hidden  hidden not visible;
 }


 class Person8 {
   static $x=1000;
   static $y;
     public const TYPE_CREDITCARD = 0;
     public const TYPE_CASH = 1;
     protected const PROTECTED_CONST = false;
     //private INTERNAL_KEY = "ABC1234";
   static function sety(){
      self::$y= self::$x;
      static::$y=self::$x;
   }
 }
 Person8::sety();

$z= Person8::$y;

interface Printable {
    function printOutput();
}
class ImageComponent implements Printable {

    function printOutput()
    {

        // TODO: Implement printOutput() method.
    }
}

trait Logger {
    public function log($logString) {
        $className = __CLASS__;
        echo date("Y-m-d h:i:s", time()) . ": [{$className}] {$logString}";
    }
}
class User {
    use Logger;
    public $name;
    function __construct($name = '') {
        $this->name = $name;
        $this->log("Created user '{$this->name}'");
    }
    function __toString() {
        return $this->name;
    }
}
class UserGroup {
    use Logger;
    public $users = array();
    public function addUser(User $user) {
        if (!in_array($this->users, $user)) {
            $this->users[] = $user;
            $this->log("Added user '{$user}' to group");
        }
    }
}
$group = new UserGroup;
//$group->addUser(new User("Franklin"));



trait First {
    public function doFirst(){
        echo "first\n";
    }
}
trait Second {
    public function doSecond() {
        echo "second\n";
    }
}
trait Third {
    use First, Second;
    public function doAll() {
        $this->doFirst();
        $this->doSecond();
    }
}
class Combined {
    use Third;
}
$object = new Combined;
$object->doAll();



trait Command {
    function run() {
        echo "Executing a command\n";
    }
}
trait Marathon {
    function run() {
        echo "Running a marathon\n";
    }
}
class Person9 {
    use Command, Marathon {
        Marathon::run insteadof Command;
        Command::run as runCommand; // change the function name or resolving conflit
    }
}
$person = new Person9;
$person->run();
$person->runCommand();


abstract class Component {
    abstract function printOutput();
}
class ImageComponent1 extends Component {
    function printOutput() {
        echo "Pretty picture";
    }
}


class A { // Base Class
    protected static $name = 'ClassA';
    public static function getSelfName() {
        return self::$name;
    }
    public static function getStaticName() {
        return static::$name;
    }
}

class B extends A {
    protected static $name = 'ClassB';
}


echo B::getSelfName(); // ClassA
echo B::getStaticName(); // ClassB

echo A::getSelfName(); // ClassA
echo A::getStaticName(); // ClassA




class Person10 {
    public $name, $address, $age;
    function __construct($name, $address, $age) {
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }
    function __destruct() {
        echo "A Building is being destroyed!";
    }
}
class Employee extends Person10 {
    public $position, $salary;
    function __construct($name, $address, $age, $position, $salary) {
        parent::__construct($name, $address, $age);
        $this->position = $position;
        $this->salary = $salary;
       // $this->__destruct();
    }

}



// return an anonymous implementation of Person
$anonymous = new class() extends Person {
    public function getName() {
// return static value for testing purposes
        return "Moana";
    }
}; // note: requires closing semicolon, unlike nonanonymous class definitions





function displayClasses() {
    $classes = get_declared_classes();
    foreach ($classes as $class) {
        echo "Showing information about {$class}<br />";
        $reflection = new ReflectionClass($class);
        $isAnonymous = $reflection->isAnonymous() ? "yes" : "no";
        echo "Is Anonymous: {$isAnonymous}<br />";
        echo "Class methods:<br />";
        $methods = $reflection->getMethods(ReflectionMethod::IS_STATIC);
        if (!count($methods)) {
            echo "<i>None</i><br />";
        }
        else {
            foreach ($methods as $method) {
                echo "<b>{$method}</b>()<br />";
            }
        }
        echo "Class properties:<br />";
        $properties = $reflection->getProperties();
        if (!count($properties)) {
            echo "<i>None</i><br />";
        }
        else {
            foreach(array_keys($properties) as $property) {
                echo "<b>\${$property}</b><br />";
            }
        }
        echo "<hr />";
    }
}

displayClasses();



class Person11 {
    public $name;
    public $age;
}
$fred = new Person11;
$fred->name = "Fred";
$props = get_object_vars($fred); // array('name' => "Fred", 'age' =>NULL);

class A1 {}
class B1 extends A1 {}
$obj = new B_1;
echo get_parent_class($obj);


$i=1;