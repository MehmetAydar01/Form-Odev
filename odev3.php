<?php

    $myNumber = $_POST["number"];

    function bolum($sayi) {

        if ( $sayi % 3 == 0 ) {
            echo "Girilen Sayi: $sayi<br>Girdiğiniz sayı 3'e tam bölünüyor.";
        } else if( $sayi % 3 == 1 ) {

            $kalanliSayi1 = $sayi + 2; 
            echo "Girilen Sayı: $sayi<br>Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı $kalanliSayi1";

        } else if ( $sayi % 3 == 2 ) {

            $kalanliSayi2 = $sayi + 1;
            echo "Girilen Sayı: $sayi<br>Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı $kalanliSayi2";

        }

    }

    bolum($myNumber);

?>