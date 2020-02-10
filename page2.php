<?php
 if($fichier = fopen("fic", "w")); 

  class trigonometrie
  {
    private $AB;
    private $BC;
    private $AC;
	public function __construct($a,$b,$c){
			$this->AB = $a;
			$this->BC = $b;
			$this->AC = $c;
	        	}	
	     public function __get($att){ return $this->$att; }
		public function __set($att,$val){
		$this->$att = $val;}
		public function __toString(){
			$s = $this->AB." ".$this->BC." ".$this->AC;
			return $s;	
            }
    function hypothenuse()
    {
      $resultat = sqrt(pow($this->BC, 2) + pow($this->AC, 2));
      return number_format($resultat, 2, ',', ' ');
    }
  }
  $trigo = new trigonometrie (4,7,4);
echo $trigo."<br>";
$strigo=serialize($trigo);
 echo $strigo."<br>"; 
 $ligne=fgets($fichier);
 $objet_trigonometrie=unserialize($ligne);
 fwrite($fichier,$strigo);
 echo $objet_trigonometrie;
 fclose($fichier);

?>
