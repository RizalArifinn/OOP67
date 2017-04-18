<?php


    /*

        interface sama halnya dengan class dibedakan dengan adanya method saja dan tidak adanya kode-kode didalam.. simplenya seperti wadah yang dikhususkan untuk function/method

    */

    interface Mobil
    {

        //method yang nantinya akan digunakan untuk mengambil data lalu diisi
        
        public function merkMobil(); //method yang digunakan untuk mengambil merkMobil

        public function typeMobil(); //method yang digunakan untuk mengambil typeMobil

        public function warnaMobil(); //method yang digunakan untuk mengambil warnaMobil

        //endOfMethod
    }
