<!-- Ejercio 2: Modifica la visibilidad de las propiedades en la clase Persona,
cambiandolas a private. Imprimimos sin error(mapeamos).-->

<?php

class Persona {
    private $name = "";
    private $surname = "";
    private $age = "";

    public function __construct($name, $surname, $age){
        $this-> name = $name;
        $this-> surname = $surname;
        $this-> age = $age;     
        }

    public function get_persona(){
        return "Nombre: ".$this->name.", Apellido: ".$this->surname.", Edad: ".$this->age;        
        }
}

$miPersona1 = new Persona("Julia","Garcia",30);
$miPersona2 = new Persona("Mario","Bros",24);

echo "Primera persona  ".$miPersona1->get_persona()."\n";
echo "Segunda persona  ".$miPersona2->get_persona()."\n";


?>