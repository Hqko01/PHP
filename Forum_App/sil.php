<?php 
    include "../mysqlBaglanti.php";

    $id = $_POST["dellID"];

    $baglanti->query("DELETE FROM dnm WHERE id = $id");

    if ($baglanti->affected_rows > 0) {
        echo $baglanti->affected_rows . " kayıt silindi.";
    } else {
        echo "Herhangi bir kayıt silinemedi.";
    }

    header('Location: '."./html.php");

?>