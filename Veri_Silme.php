<?php 
    include "mysqlBaglanti.php";
    
    $baglanti->query("DELETE FROM dnm WHERE id = 3");

    if ($baglanti->affected_rows > 0) {
        echo $baglanti->affected_rows . " kayıt silindi.";
    } else {
        echo "Herhangi bir kayıt silinemedi.";
    }
?>