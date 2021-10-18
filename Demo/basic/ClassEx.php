<?php 
class Printable {
    public $nameOfPerson = "Gopika";
    function printNameOfPerson(){
        echo "Hi! This is $this->nameOfPerson";
    }
}
$obj = new Printable();
$obj->printNameOfPerson();
?>



<?php 
class BaseClass {
    public $name = "Gopika";
    public $age = "22";
    public function printName() {
        echo $this->name;
    }
    protected function printAge() {
        echo $this->age;
    }
    private function printNameAndAge() {
        echo "$this->name $this->age";
    }
}

class DerivedClass extends BaseClass { }
$obj1 = new DerivedClass();
$obj1->printName();
//$obj1->printAge();
//$obj1->printNameAndAge();
?>


