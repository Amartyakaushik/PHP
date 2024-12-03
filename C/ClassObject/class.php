<?php
    class People{
        public $name;
        public $age;

        // constructor
        public function __construct($naam, $umar){
            $this->name = $naam;
            $this->age = $umar;
        }

        public function display(){
            echo "Name: $this->name, <br> Age: $this->age <br>";
        }
    };

    // Inheritence
    class Student extends People{
        public $roll_no;

        public function __construct($naam, $umar,$roll){
            parent::__construct($naam, $umar);
            $this->roll_no = $roll;
        }

        public function display(){
            parent::display();
            echo " roll no: " . $this->roll_no . "<br>";
        }
    }

    $Hari = new People("Amartya", 34);
    $Hari->display();
    $std1 = new Student("Charchil", 39, 12216495);
    $std1->display();

?>