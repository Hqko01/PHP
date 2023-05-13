<?php 
    include "mysqlBaglanti.php";

    $baglanti -> query("UPDATE dnm SET id = 1, ad = 'Merhaba Ben Hakan' WHERE id = 11");

    if ($baglanti->affected_rows > 0) {
        echo $baglanti->affected_rows . " kayıt güncellendi.";
    } else {
        echo "Herhangi bir kayıt güncellenemedi.";
    }
?>