<?php
    class User {
        public $name;
        public $age;

        public static $passLength = 6;
        static function validate_pass($pass) {
            if(strlen($pass) >= self::$passLength) {
                echo 'Pass valid';
            } else {
                echo "Pass don't valid";
            }
        }
    }
    User::validate_pass('hello1');
