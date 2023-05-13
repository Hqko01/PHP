
<?php 
    $baglanti = new mysqli("localhost", "root", "", "deneme");

    if ($baglanti->connect_errno > 0) {
        die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
    }
    echo "Bağlantı Başarılı </br> </br>"

?>