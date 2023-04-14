<!-- Ejercio 3: Crear una función saludar y la llamo (primero pública y luego privada).-->

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

    public function saludo(){
        return "Hola $this->name ¿Qué tal estás?";
        }
    
    private function saludo2(){
        return "Hola $this->name ¿Qué tal el día?";
        }
    
    public function get_saludo2(){
        return "Hola $this->name ¿Qué tal el día?";       
        }
}



$miPersona1 = new Persona("Julia","Garcia",30);
$miPersona2 = new Persona("Mario","Bros",24);

echo $miPersona1->saludo().PHP_EOL;  // Llamada a un método público
echo $miPersona1->get_saludo2(); //Llamada a un método  privado a través de una función pública
