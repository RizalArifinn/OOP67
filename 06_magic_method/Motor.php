<?php

    class Motor
    {
    	public $merk; //property public
    	public $cc; //property
    	public $warna;
    	public $roda; //const diganti menjadi public karena nanti divalidasi
    	private $no_mesin; //private adalah property yang bisa diakses oleh classnya sendiri
    	private $suratmesin;



        //method

        //method __construct langsung dijalankan secara otomatis ketika web dibuka/diload
        public function __construct(array $params = array())
        {
            // print_r($params);
            if (count($params)) {
                // print_r($params);
                foreach ($params as $key => $value) { //$key = property, $value = isi
                    $this->key = $value;
                }
            }
        }

        //__set dipanggil ketika mencoba set property yang tidak bisa diakses ke dalam object
        public function __set($name, $value)
        {
            //pengecekan ada tidaknya isi dari $this->name
            if (isset($this->name)) {
                $this->name = $value;
            }
        }

    	public function setNoMesin($no_mesin)
    	{

    		return $this->no_mesin = $no_mesin;
    	}

    	private function suratmesin()
    	{

            return $this->suratmesin;
    	}

    	public function setWarna($warna)
    	{

    		return $this->warna = $warna;
    	}

    	public function setMerk($merk)
    	{

    		return $this->merk = $merk;
    	}

    	public function setCC($cc)
    	{

    		return $this->cc = $cc;
    	}

    	public function showConstan()
    	{
    		return self::roda;
    	}


        
    	public function setRoda($roda)
    	{

            return $this->roda = $roda;

    	}

    	//endOfMethod

    }
