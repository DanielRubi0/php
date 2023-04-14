<!-- Ejercio 4: Crear dos subclases que extiendan de Persona, con propiedades y
métodos: Estudiante y Docente. -->

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

class Teacher extends Person {
    public $subject = "";

    public function __construct($name,$surname,$age,$subject){
        parent::__construct($name, $surname, $age);
        $this->subject = $subject;
        
    }

    public function getTeacher(){
        return parent::get_person().", Asignatura: ".$this->subject;
    }

    public function saludo(){
        return "Buenos días profesor $this->name ¿Como está hoy?";
    }

    /* public function comer(){
        return "Buenos días profesor $this->name ¿Que deseas comer hoy?";
    } // En una clase hija no se puede crear una función con mismo nombre que la función en clase padre si ésta está definida como funcion final (línea 35)*/
}

class Student extends Person {
    public $course = "";

    public function __construct($name,$surname,$age,$course){
        parent::__construct($name, $surname, $age);
        $this-> course = $course;
        
    }
}


$miPersona1 = new Persona("Julia","Garcia",30);
$miPersona2 = new Persona("Mario","Bros",24);

echo $miProfesor1->saludo()."\n";

echo $miProfesor1->getTeacher()."\n";

echo Person::$contador."\n"; //Contador de los objetos de clase Person

echo $miProfesor1->saludo(); //Overreading del metodo de saludar