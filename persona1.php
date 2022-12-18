<!-- Ejercio 1: Crear una clase Persona que tenga propiedades públicas (nombre,
apellido y edad). Crear 2 personas, Julia y Mario. Imprimir su información-->

<?php

class Persona {
    public $name = "";
    public $surname = "";
    public $age = "";

    static public $contador=0;

    public function __construct($name, $surname, $age){
        $this-> name = $name;
        $this-> surname = $surname;
        $this-> age = $age;
        self::$contador++;        
        }
        
    public function get_person(){
        return "Nombre: ".$this->name.", Apellido: ".$this->surname.", Edad: ".$this->age;        
    }

    public function get_name(){
        return $this->name;        
    }

    public function set_person($name, $surname, $age){
        $this-> name = $name;
        $this-> surname = $surname;
        $this-> age = $age;
    }
    
}

echo "Mi primera persona es ".$miPersona1->name." ".$miPersona1->surname." y su edad es de ".$miPersona1->age." años.\n";     

echo "Mi segunda persona es ".$miPersona2->name." ".$miPersona2->surname." y su edad es de ".$miPersona2->age." años.";
