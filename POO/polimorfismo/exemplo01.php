<?php

abstract class Animal{

	public function comunicar(){
		return "Som";
	}

	public function mover(){
		return "Andar";
	}
}

class Cachorro extends Animal{
	public function comunicar(){
		return "Late";
	}
}


class Gato extends Animal{
	public function comunicar(){
		return "Mia";
	}
}

class Passaro extends Animal{
	public function comunicar(){
		return "Canta";
	}

	public function mover(){
		return "Voa e " . parent::mover();
	}
}

$pluto = new Cachorro();

echo $pluto->comunicar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "--------------------<br>";

$garfield = new Gato();

echo $garfield->comunicar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "--------------------<br>";

$piupiu = new Passaro();

echo $piupiu->comunicar() . "<br/>";
echo $piupiu->mover() . "<br/>";



  ?>