<?php


    require 'Manusia.php'; //mengambil dari manusia.php / menghubungkan dengan manusia.php


    $manusia = new Manusia(); //membuat object baru Manusia
    $manusia->bernafas(); //memanggil method yang berada di manusia.php

    $manusia->jenisMamalia = 'manusia'; //memasukkan data jenisMamalia
    $manusia->rasMamalia = 'manusia'; //memasukkan data rasMamalia
    echo $manusia->detailMamalia(); //memanggil method dari mamalia.php lalu ditampilkan
