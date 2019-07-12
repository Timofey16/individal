<?php
class rectangle { 
    var $s; 
        function sAssign ($l1, $l2) { 
        $this->l1 = $l1; 
        $this->l2 = $l2;
    }
 	function sСomputing () { 
        $this->s = $this->l1*$this->l2;

    }
    function sReturn () {
          return $this->s;
    }
}
 

$s = new rectangle; 
$s->sAssign(rand(2,10),rand(2,10)); 
$s->sСomputing();
$myS = $s->sReturn(); 

 
unset($s); 
echo "Площадь прямоугольника  ";
echo $myS. "<br>"; 


class Circle {

	var $c;
	var $PI = 3.14;
	function cFunc ($r ) {
		$this->r = $r;
		$this->PI;
	}

	function cComp() {
		$this->c = ($this->r*$this->r)*$this->PI;
		return $this->c;
	}

}
	$randC = rand(5,10);
	$c = new Circle;
	$c->cFunc($randC);
	$myC= $c->cComp();
	echo "Площадь круга:". $myC. '<br>' ;

	unset($c); 


class Piramid{
	var  $sum;
	var  $sum2;
	var $js;


	function osn ($r1,$r2,$vs) {
		$this->sum = ($this->r1+$this->r2)*2;
		$this->js = 1/2*$this->sum*$this->vs;
		$this->sum2 = $this->r1*$this->r2;
		$this ->sum = $this->sum* $this->sum2;
		return $this->sum;
	} 
}
 
 $chis =rand(1,10);
 $odjectP= new Piramid;
 
 
 echo "Площадь пирамиды". $odjectP->osn($chis,$chis,$chis);

