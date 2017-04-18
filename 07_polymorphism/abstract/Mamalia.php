<?php



    /*
       abstract ialah pondasi/leluhur dari class class turunannya. pada abstract ini akan berisi semua hal yang general dari class-class turunannya nanti
    */
    abstract class Mamalia
    {
    	public $jenisMamalia; //membuat property dari class mamalia
    	public $rasMamalia; //salah satu jenis property yang dibuat


    	//membuat method yang nantinya akan ditampilkan
    	public function detailMamalia()
    	{
            /*
              fungsi dari strtoupper ialah menjadikan semua hurufnya menjadi kapital. ex = contoh => CONTOH
              fungsi dari ucwords ialah menjadikan huruf didepan perkata menjadi kapital. ex = contoh ku => Contoh Ku
            */

    		return 'Jenis Mamalia yang anda inputkan ialah : '.strtoupper($this->jenisMamalia).', '.
    		       ' dengan Ras dari golongan : '.ucwords($this->rasMamalia).PHP_EOL.'<br>';
    	}

        
        //method yang digunakan untuk mengambil ciri-ciri pernafasan
    	abstract public function bernafas();
    }
