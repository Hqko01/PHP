<?php 
    include "mysqlBaglanti.php";

    $sorgu = $baglanti -> query("SELECT * FROM dnm WHERE id = 2"); // primary key ile veri çekme
    $cikti = $sorgu -> fetch_array();

    echo $cikti["ad"]."</br>";

    //mysqli_fetch_row(): Sorgu sonuçları dizi tipinde geri döndürülür. Dizinin indis değerleri 0' dan başlar ve sütun sayısı kadar devam eder. 

    $sql="SELECT * FROM dnm";
    $sorgu=mysqli_query($baglanti,$sql);
    while( $sonuc=mysqli_fetch_row($sorgu) ){
        echo $sonuc[0]." -- ";    // ilk kolonumuz
        echo $sonuc[1]."</br>";    // ikinci kolonumuz 
    }
    echo "</br> ---mysqli_fetch_row()--- </br></br>";


    //mysqli_fetch_assoc(): Sorgu sonuçları dizi tipinde geri döndürülür. Dizinin indis değerleri ise veritabanı tablomuzdaki sütun isimleridir.

    $sorgu=mysqli_query($baglanti,$sql);
    while( $sonuc=mysqli_fetch_assoc($sorgu) ){
        echo $sonuc["id"]." -- ";     // id kolonu
        echo $sonuc["ad"]."</br>";     // ad kolonu 
    }
    echo "</br> ---mysqli_fetch_assoc()--- </br></br>";

    //mysqli_fetch_array(): Sorgu sonuçları dizi tipinde geri döndürülür. Dizinin indis değerlerinin nasıl olacağı ise ikinci bir parametreyle belirlenir.

    $sorgu=mysqli_query($baglanti,$sql);
    while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){ //MYSQLI_ASSOC
        echo $sonuc["id"].' -- '.$sonuc["ad"].'<br>'; 
    }
    echo "</br>";

    $sorgu=mysqli_query($baglanti,$sql);
    while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_NUM) ){ //MYSQLI_NUM
        echo $sonuc[0].' -- '.$sonuc[1].'<br>'; 
    }
    echo "</br>";

    $sorgu=mysqli_query($baglanti,$sql);
    while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_BOTH) ){ //MYSQLI_BOTH
        echo $sonuc[1].' -- '.$sonuc["ad"]."</br>"; 
        // ikisinin de aynı sonucu verdiğine dikkat edelim.
    }
    echo "</br> ---mysqli_fetch_array()--- </br></br>";

    //mysqli_fetch_object(): Sorgu sonuçları nesne(object) tipinde geri döndürülür. Veritabanı tablomuzdaki sütun isimleri ile verilere erişiriz.

    $sorgu=mysqli_query($baglanti,$sql);
    while( $sonuc=mysqli_fetch_object($sorgu) ){
        echo $sonuc->id.' -- '.$sonuc->ad.'<br>'; 
    }
    echo "</br> ---mysqli_fetch_object---"


?>