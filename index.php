<?php
// Conceptos basicos de PHP
//tipado dinamico
//basado en paradigma orientado a objetos
//imperativo, interpretado

//definir una variable que sea variable:
$bool = true;
$float = 0.5;
$int = 5;
$string = "Hola";

//definir una variable que sea constant:
const VERSION = "1";

//Listas: Conjunto de datos ordenados
$my_list = array($bool, $float, $int, $string);
echo "Contenido de la posicion 0 de la lista my_list: $my_list[0]" . "\n";

array_push($my_list, "new value");
array_push($my_list, "Hola");

for ($i=0; $i < 4; $i++) { 
    echo "$my_list[$i]" . "\n";
};

//diccionarios
$my_dicc = array("strings" => $string, "integer" => $int, "float" => $float);
print_r($my_dicc);

//set
array_unique($my_list);
print_r($my_list);

//sizeof
echo sizeof($my_list). "\n";
echo sizeof($my_dicc). "\n";

//foreach
foreach ($my_list as $value) {
    echo "$value". "\n";
}

//clases
class Person{
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function getName(){
        return $this->name;
    }

    function greeting(){
        echo "Hello, my name is ". $this->name. "\n";
    }
}

const person_1 = new Person("John", 30);
echo person_1->getName() . "\n";
echo person_1->greeting();

echo gettype(person_1) . "\n";