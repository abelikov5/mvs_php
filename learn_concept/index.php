<?php

    class User {
        protected $age;
        protected $name;

        function __construct($name, $age) {
            $this->age = $age;
            $this->name = $name;
        }
    }
    class Customer extends User {
        protected $balance;
        function __construct($name, $age, $balance){
            parent::__construct($name, $age);
            $this->balance = $balance;
        }
        function __get($prop) {
            if (property_exists($this, $prop)) {
                return $this->$prop;
            }
        }
    }

    $customer = new Customer('Sasha', 38, 500);
    echo $customer->__get('age');

