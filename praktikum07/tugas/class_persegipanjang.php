<?php 

class PersegiPanjang{
    public $panjang, $lebar;

    function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function luasPP(){
        $luas = $this->panjang * $this->lebar;
        return ($luas);
    }

    public function kelilingPP(){
        $keliling = 2 * ($this->panjang + $this->lebar);
        return($keliling);
    }
}

//$pp = new PersegiPanjang("20", "20");

//echo "Panjang :" . $pp->panjang . "<br>";
//echo "Lebar : " . $pp->lebar . "<br>";
//echo "Luas Persegi Panjang : " . $pp->luasPP() . "<br>";
//echo "Keliling Persegi Panjang : " . $pp->kelilingPP() . "<br>";

?>