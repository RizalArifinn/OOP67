<?php


    require 'Mobil.php'; //ambil dari mobil.php / menghubungkan dengan mobil.php



    //Mercedes harus di-implementasikan ke Mobil karena Mercedes merupakan bagian dari Mobil

    class Mercedes implements Mobil
    {
     
        //pengambilan method dari Mobil.. karena jika tidak diambil maka akan terjadi error   
        public function merkMobil()
        {
        	echo 'Mercedes Benz'; //isi dari function merkMobil
        }

        public function typeMobil()
        {
        	echo 'S500'; //isi dari function typeMobil
        }

        public function warnaMobil()
        {
        	echo 'Silver'; //isi dari function warnaMobil
        }


        /*

         kenapa ini ditutup? karena akan terjadi error apabila 1 method yang sama berada dalam 1 class yang sama juga

         Bila ingin menambah cabang dari Mobil. kita harus membuat class baru lagi
        */
        // public function merkMobil()
        // {
        // 	echo 'Ford';
        // }

        // public function typeMobil()
        // {
        // 	echo 'Mustang';
        // }

        // public function warnaMobil()
        // {
        // 	echo 'Hitam';
        // }
    }
