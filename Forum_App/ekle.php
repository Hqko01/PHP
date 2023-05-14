<?php 
    include "../mysqlBaglanti.php";

    $ad=$_POST["ad"];
    $id=$_POST["id"];

    $sql = "INSERT INTO dnm (id, ad) VALUES ('".$id."','".$ad."')";

    if (mysqli_query($baglanti, $sql)) {
        echo "Ekleme Başarılı";
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    header('Location: '."./html.php");

?>