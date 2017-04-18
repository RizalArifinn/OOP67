<?php


    require_once 'Mamalia.php'; //mengambil dari mamalia.php / menghubungkan dengan mamalia.php

    
    /*
      manusia ialah class turunan dari mamalia, untuk menghubungkan antara keduanya ialah menggunakan extends
    */
    class Manusia extends Mamalia
    {

        //mengisi data dari method bernafas, lalu ditampilkan
    	public function bernafas()
    	{
    		echo 'Bernafas menggunakan hidung, '.PHP_EOL;
    	}
    }
