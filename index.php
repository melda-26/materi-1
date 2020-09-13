<?php



 
 class Hewan {
 	public $jumlah_kaki, $Suaranya,$bisa_terbang;

 	public function bersuara(){
 		return $this->Suaranya;
 	}

 }

class kucing extends Hewan {
	public $bisa_terbang="tidak bisa terbang";

	function bersuara(){
		return "meooog";
	}

	function jumlah_kaki(){
		return "jumlah_kaki nya Adalah = 4";
	}


}

class Anjing extends Hewan {
	public $bisa_terbang="tidak bisa terbang";

	function bersuara(){
		return "Guk Guk";
	}

	function jumlah_kaki(){
		return "jumlah_kaki nya Adalah = 4";
	}
}


class Elang extends Hewan{
	public $bisa_terbang="bisa terbang";

	function bersuara(){
		return "Miiiip";
	}


	function bisa_terbang(){
		return "zya bisa_terbang";
	}

	function jumlah_kaki(){
		return "Zya Punya Kaki Sebanyak";
	}
}



class Angsa extends Hewan {
	public $bisa_terbang="bisa terbang";

	function bersuara(){
		return "Kwaaak";
	}


	function bisa_terbang(){
		return "masha bisa_terbang";

	}

	function jumlah_kaki(){
		return "Pumya Kaki Sebanyak";
	}

}




$momo = new kucing;
$momo ->jumlah_kaki = 4;
echo "Momo Adalah Kucing <br>";
echo "punya kaki Sebanyak : ".$momo->jumlah_kaki. "<br>";
echo $momo->bisa_terbang. "<br>";
echo "Suaranya : ".$momo -> bersuara()."<br>";

echo "<hr>"; 

$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ". $doggo->jumlah_kaki. "<br>";
echo $doggo->bisa_terbang. "<br>";
echo "Suaranya : ".$doggo-> bersuara(). "<br>";



echo "<hr>";

$zya = new elang;
$zya->jumlah_kaki = 2;
echo "zya Adalah Elang <br>";
echo "Punya Kaki Sebanyak : ".$zya->jumlah_kaki. "<br>";
echo $zya->bisa_terbang."<br>";
echo "Suaranya : ".$zya->bersuara()."<br>";

echo "<hr>";

$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "masha Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : ".$masha->jumlah_kaki. "<br>" ;
echo $masha->bisa_terbang."<br>";
echo "Suaranya : ".$masha->bersuara()."<br>";




