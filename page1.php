<?php


if($f=fopen("exemple.txt","w"));
class Stagiaire{
	private $nom,$prenom,$age,$group;
	public function __construct($n,$p,$a,$g){
			$this->nom = $n;
			$this->prenom = $p;
			$this->age = $a;
	         $this->group = $g;	}	
public function __get($att){ return $this->$att; }
		public function __set($att,$val){
		$this->$att = $val;}
public function __toString(){
			$s = $this->nom." ".$this->prenom." ".$this->age." ".$this->group;
			return $s;	
            }
	}

$s1= new stagiaire("btissam","yaqine",20,"tdm201");
echo $s1."<br>";
 
$f = fopen("exemple.txt", "r");
$ss1=serialize($s1);
echo $ss1."<br>";
$ligne=fgets($f);
$objet_stagiaire=unserialize($ligne);
echo $objet_stagiaire;
fclose($f);

?>