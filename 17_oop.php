<?php
// class User {
//     public $name;
//     public $email;
//     public $password;

//     public function __construct($name, $email, $password) {
//         $this->name = $name;
//         $this->email = $email;
//         $this->password = $password;
//     }

//     //methods
//     function set_name($name) {
//         $this->name = $name;
//     }

//     function set_email($email) {
//         $this->email = $email;
//     }

//     function set_password($password) {
//         $this->password = $password;
//     }
//     function get_name() {
//         return $this->name;
//     }
//     function get_email() {
//         return $this->email;
//     }
//     function get_password() {
//         return $this->password;
//     }
   
// }

// $user1 = new User('John', 'john@gmail.com', 'password');

// echo $user1 ->get_name();

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
    }
  }
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  $strawberry->intro();