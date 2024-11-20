<?php 
class User{
    private $id;
    private $name;
    private $surname;
    private $email;

    public function __construct(int $id, string $name, string $surname, string $email){
        $this->id=$id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }

    public function __get($propriete) {
        switch ($propriete) {
            case "id" : return $this->id; break;
            case "name" : return $this->name; break;
            case "surname" : return $this->surname; break;
            case "email" : return $this->email; break;
        }
    }

    // Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "id" : $this->id = $value; break;
            case "name" : $this->name = $value; break;
            case "surname" : $this->surname = $value; break;
            case "email" : $this->email = $value; break;
        }
    }

}
?>