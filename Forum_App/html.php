<?php
$baglanti = new mysqli("localhost", "root", "", "deneme");
$sql = "SELECT * FROM dnm";

if ($baglanti->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
}

$sorgu = mysqli_query($baglanti, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forum APP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form {
            background-color: #232323;
            flex: 50%;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form form {
            display: flex;
            flex-direction: column;
            background-color: rgba(170, 169, 169, 0.678);
            backdrop-filter: blur(5pc);
            padding: 2pc;
        }

        .form form input {
            padding: .4pc;
            margin: .4pc;
            border: none;
            border-radius: .2pc;
            outline: none;
            background-color: whitesmoke;
        }

        .form form input[type="submit"] {
            cursor: pointer;
        }

        .form form h3 {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 1.3pc;
            color: whitesmoke;
        }

        .database {
            flex: 50%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .database .content {
            max-width: 30%;
            min-height: 60%;
            max-height: 100%;
            text-align: center;
            padding-top: .8pc;
            padding-bottom: .8pc;
        }

        .database .content p {
            border-bottom: 1px solid black;
            padding: .5pc;
        }

        @media only screen and (max-width:700px) {
            body {
                flex-direction: column;
            }

            .database .content {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="form">
        <form action="./ekle.php" method="POST">
            <h3>Ekleme yap</h3>
            <input type="text" name="id" placeholder="ID">
            <input type="text" name="ad" placeholder="AD">
            <input type="submit" value="Ekle" class="button">
        </form>

        <form action="./sil.php" method="POST">
            <h3>Sil</h3>
            <input type="text" name="dellID" placeholder="ID">
            <input type="submit" value="SIL" class="button">
        </form>
    </div>
    <div class="database">
        <div class="content">
            <?php
            while ($sonuc = mysqli_fetch_row($sorgu)) {
                echo "<p>" . $sonuc[0] . " -- ";
                echo $sonuc[1] . "</br></p>";
            } ?>
        </div>
    </div>
</body>

</html>