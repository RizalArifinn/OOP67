<?php

    require 'Motor.php'; //ambil dari motor.php
    require 'Validator.php'; //ambil dari validator.php

    //syarat data agar valid datanya
    $rules = array('merk' => 'required|merk', 'cc' => 'required|cc', 'warna' => 'required|warna', 'roda' => 'required|roda:2', 'no_mesin' => 'required|no_mesin:12340'); 

    //isi dari data
    $data = array('merk' => 'Honda', 'cc' => 160, 'warna' => 'Hitam', 'roda' => 2, 'no_mesin' => 12340); //isi data

    $validator = new Validator(); //new object validator



    //pemvalidasian data agar data tersebut valid
    if ($validator->validate($data, $rules) === true) {

        //ketika validasi berhasil

        $john = new Motor($data); //new object motor;

        echo '<pre>';
            print_r($data);
        echo '</pre>';
        
        echo '<br>';

        var_dump($john); //dumping object john
    } else {
        //ketika validasi gagal

        var_dump($validator->getErrors());
    }

