<?php

class Vehiculo{
     
    // Atributos
    private $modelo;
    private $color;
    private $velocidad;
	private $kilometrage;
	public $Numero_pasajeros;
     
    // Constructor
    public function __construct($modelo, $color, $velocidad ,$kilometrage,$Numero_pasajeros){
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
		$this->kilometrage=$kilometrage;
		$this->Numero_pasajeros=$Numero_pasajeros;
    }
     
    //Métodos
	  public function getmodelo(){
// Devolvemos un atributo
        return $this->modelo;
    }
     
    public function setModelo($modelo){
//Le damos un valor a un atributo
        $this->modelo = $modelo;
    }
     
	
 public function getNumero_pasajeros(){
// Devolvemos un atributo
        return $this->Numero_pasajeros;
    }
     
    public function setNumero_pasajeros($Numero_pasajeros){
//Le damos un valor a un atributo
        $this->Numero_pasajeros = $Numero_pasajeros;
    }
     	
	
	
    public function getColor(){
// Devolvemos un atributo
        return $this->color;
    }
     
    public function setColor($color){
//Le damos un valor a un atributo
        $this->color = $color;
    }
     
	
    public function getVelocidad(){
        return $this->velocidad;
    }
	
	public function getkilometrage(){
		 return $this->kilometrage;
		
    }
	public function setkilometrage($kilometrage){
//Le damos un valor a un atributo
		$this->kilometrage = $kilometrage;
		
		
    }
	
	
     
    public function mostrarInfo(){
         
        // Llamamos a otros métodos
        $info = "<h1>Información del coche:</h1>";
        $info.= "Modelo: ".$this->getmodelo();
        $info.= "<br/> Color: ".$this->getColor();
        $info.= "<br/> Velocidad: ".$this->getVelocidad();
		
		$info.="<br/> kilometrage: ".$this->getkilometrage();
		$info.="<br/> Numero de Pasajeros: ".$this->getNumero_pasajeros()."<br>"."<br>";
         
        return $info;
	} // cierre funcion mostrarInfo
	
	//METODO QUE DETERMINA SI ES TRANSPORTE PRIVADO O PUBLICO SEGUN NO. DE PASAJEROS.
	
	public function publicoprivado(&$Numero_pasajeros){
		if($Numero_pasajeros>5){
			
			echo "TRANSPORTE PUBLICO--->\t";
		}else
			echo "TRANSPORTE PRIVADO--->\t";
		
	}
	
	// METODO QUE DETERMINA SI ES BARCO,AVION O AUTOBUS DEPENDIENDO DEL NUMERO DE PASAJEROS
	
	public function avionbarcoautobus(&$Numero_pasajeros){
		if($Numero_pasajeros>550 and $Numero_pasajeros<=30000){
			
			echo "BARCO--->\t";
		}elseif($Numero_pasajeros>100 and $Numero_pasajeros<=555)
			echo "AVION--->\t";
		else{
			echo "AUTOBUS--->\t";
		}
		
	}// Cierre funcion avionbarcoautobus
	
	
	
	
	
}//Cierre class Vehiculo

// basandose en la clase Vehiculo antes creada diseñe una nueva clase denominada Avion

class Avion extends Vehiculo{
	
	
}
	


/* Creamos el objeto / Instanciamos la clase y le pasamos los parámetros del constructor
Escriba el codigo necesario para crear un objeto de la clase vehiculo muestre un mensaje por pantalla si
el vehiculo es de transporte publico o privado  abajo el objeto donde muestra si es publico o privado lo hace
	el metodopublicoprivado*/

$coche = new Vehiculo("BMW VICTOR", "ROJO", 100,-2050,20000);
 
// Mostramos la información del primer coche
echo $coche->mostrarInfo();
 
/*Esciba el codigo necesario para crear un objeto de la clase Avion muestre un mensaje por pantalla indicando
la cantidad de turbinas que tiene el Avion, utilizando el metodo previamente escrito y perteneciente ala clase
base muestre por pantalla Avion*/

//$coche2 = new Avion();

 
 
// Mostramos la información del segundo coche
//echo $coche2->mostrarInfo();
$coche->publicoprivado($coche->Numero_pasajeros);
$coche->avionbarcoautobuS($coche->Numero_pasajeros);