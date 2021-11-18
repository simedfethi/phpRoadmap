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
$i=1;