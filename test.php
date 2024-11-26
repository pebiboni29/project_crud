<?php
    $start=true;
    while($start){
        echo "Aplikasi kalkulator\n";
        echo "Pilih operator \n";
        $pilihan ='+';
        switch ($pilihan) {
            case '+':
                echo "Masukkan angka pertama\t: \n";
                echo "Masukkan angka kedua\t: ";
                $start=false;                 
                break;

            default:
                $start=false;
                break;
        }

    }