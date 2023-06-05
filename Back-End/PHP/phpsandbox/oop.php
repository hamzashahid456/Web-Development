<?php

    class Person{
        private $name;
        private $email;
        public   static $ageLimit = 80;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created<br>';      // this will get class name
        }

        public function __destruct(){
            echo __CLASS__.' destroyed<br>';      // this will get class name
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name.'<br>';
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email.'<br>';
        }

        public static function getAgeLimit(){
            return self::$ageLimit.'<br>';
        }
    }

    // We can access static value without creating instance of class
    echo Person::$ageLimit;
    echo Person::getAgeLimit();     // same goes with method

    // $person1 = new Person('Omer', 'omer@gmail.com');
    // echo $person1->getName();
    // echo $person1->getEmail();


    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email);
            $this->balance = $balance;
            echo __CLASS__.' created<br>';      // this will get class name
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance.'<br>';
        }
    }
    
    // $customer1 = new Customer('Omer', 'omer@gmail.com', 300);
    // echo $customer1->getName();
    // echo $customer1->getEmail();
    // echo $customer1->getBalance();
