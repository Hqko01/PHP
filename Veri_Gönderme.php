<?php 
    include "mysqlBaglanti.php";

    $sql = "INSERT INTO dnm (id, ad) VALUES ('4', 'Hqko01')";

    if (mysqli_query($baglanti, $sql)) {
        echo "Ekleme Başarılı";
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
   
?>