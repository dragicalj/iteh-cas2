<?php

    class User{
        public $id;
        public $username;
        public $password;
        //definisemo jedan konsruktor, pa u zavisnosti od parametra koji prosledim
        //funkcija koja definisekonstruktor
        public function __construct($id=null, $username=null, $password=null){
            
            $this->id=$id;
            $this->username=$username;
            $this->password=$password;
        }

        public static function logInUser($username,$password,mysqli $conn){

            $query= "SELECT * FROM user WHERE username=$username and password=$password";
            //konekcija sa bazom
            return $conn->query($query);
        }
    }


?>